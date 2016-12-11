<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\UploadPhotoRequest;
use App\Interfaces\PhotoRepositoryInterface as PhotoRepository;

class PhotoController extends Controller
{
    /** instancia do repositorio de fotos **/
    private $fotosRepository;

    /**
     * Construtor recebendo instancia de PhotoRepository para lidar com as Photos
     */
    function __construct(PhotoRepository $photoRepository)
    {
        $this->fotosRepository = $photoRepository;
    }

    /**
     * Metodo para receber por POST a request de upload de Foto redimensionar e salvar para o usuario
     *
     * @param $request - Uma instancia de UploadPhotoRequest
     * @return redirect
     */
    public function postUploadUserPhoto(UploadPhotoRequest $request)
    {
        $retorno =  $this->fotosRepository->uploadFotoUsuario($request);

        // Caso nao funcione
        if ( ! $retorno['success'] ) {
            session()->flash('alert.message', 'Erro ao alterar a foto');
            session()->flash('alert.style', 'error');
            return redirect()->back();
        }

        //Se chegar aqui está tudo ok :)
        session()->flash('alert.message', 'Foto alterada com sucesso!');
        session()->flash('alert.style', 'success');
        return redirect()->back();
    }

}
