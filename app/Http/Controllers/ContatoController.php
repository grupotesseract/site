<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ContatoRequest;
use App\Repositories\EmailRepository;

class ContatoController extends Controller
{
    private $repositorioEmails;

    /**
     * Cosntrutor recebendo repositorio de emails
     */
    function __construct(EmailRepository $emailRepository)
    {
        $this->repositorioEmails = $emailRepository;
    }

    /**
     * Metodo para receber a request de submit do formulario de contato
     */
    public function postContato(ContatoRequest $request)
    {
        $enviouEmail = $this->repositorioEmails->enviaEmailContato($request);
        dd($enviouEmail);
    }


}
