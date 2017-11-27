<?php

namespace Fsbcomunicacao\Trello;

class Trello
{
    public function __construct($key, $token) {
        $this->key = $key;
        $this->token = $token;
    }

    /**
     * recebe um texto para ser inserido no cartão de crosscheck
     * @param string $texto
     * @return string $mensagem
     */
    public function gravaComentario($texto)
    {
        $client = new \GuzzleHttp\Client();
        try{
            $res = $client->request('POST',
                'https://api.trello.com/1/cards/3MGZwTU2/actions/comments',
                [
                    'form_params' => [
                        'key' => $this->key,
                        'token' => $this->token,
                        'text' => $texto
                    ]
                ]
            );
            $mensagem = "Gravado com sucesso";

        } catch(\Exception $e){
            $mensagem = $e->message();
        }
        
        return $mensagem;
    }
}
