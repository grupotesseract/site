<?php

namespace App\Repositories;

use App\Models\Photo;
use App\Interfaces\PhotoRepositoryInterface;
use App\Repositories\UserRepository as UserRepository;
use Input;
use Carbon\Carbon;
use Image;

/**
 * Repositorio para centralizar a logica e operacoes com Fotos
 */
class PhotoRepository extends PhotoRepositoryInterface
{
    private $userRepository;

    /**
     * Costrutor recebendo instancia do repositorio de Users para lidar Users
     */
    function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Metodo para criar uma nova foto e retornar o id
     */
    public function uploadFotoUsuario($request)
    {
        //Testando se o file é valido
        $file = Input::file('file');
        if ($file && $file->isValid()) {

            //Criando path inicial para direcionar o arquivo
            $destinationPath = public_path() . '/uploads/';
            //Pega o formato da imagem
            $extension = Input::file('file')->getClientOriginalExtension();

            //usando o intervention para criar a imagem
            $filename = time();
            $file = Image::make( $file->getRealPath() );
            $upload_success = $file->save($destinationPath.$filename.'.'.$extension);

            //Se o upload da foto ocorreu com sucesso
            if ($upload_success) {

                //Removendo a foto de avatar atual caso exista
                $this->userRepository->deleteFotoAvatarUsuario($request->owner_id);

                //Criando e persistindo no BD uma nova foto já associada ao user
                $Foto = Photo::create([
                    'image_name' => $filename,
                    'image_path' => $destinationPath,
                    'image_extension' => $extension,
                    'owner_id' => $request->owner_id,
                    'owner_type' => $request->owner_type
                ]);

                return [
                    'success' => true,
                    'foto' => $Foto
                ];

                // Se nao tiver funcionado, retornar false no success para o js se manisfestar
            } else {
                return [
                    'success' => false
                ];
            }
        }
    }


}
