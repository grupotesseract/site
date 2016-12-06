<?php

namespace App\Repositories;

use Mail;

/**
 * Repositorio para centralizar a logica e operacoes envolvendo emails
 */
class EmailRepository
{

    /**
     * Metodo para enviar a mensagem do formulario de contato para o email contato
     */
    public function enviaEmailContato($data)
    {
        $enviou = Mail::send('emails.contato', ['formData' => $data], function ($message) use ($data) {
            $message->to('contato@grupotesseract.com.br', 'Grupo Tesseract')->subject('[Tesseract - Alguém enviou uma mensagem pelo form de contato]');
            $message->from($data->email, $data->nome);
        });

        return $enviou;
    }

}
