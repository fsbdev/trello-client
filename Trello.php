<?php

namespace Fsbcomunicacao\Trello;

class Trello
{
    /**
     * Multiplies the two given numbers
     * @param int $a
     * @param int $b
     * @return int
     */
    public function grava_comentario($texto)
    {
        $client = new \GuzzleHttp\Client();
        try{
            $res = $client->request('POST',
                'https://api.trello.com/1/cards/3MGZwTU2/actions/comments',
                [
                    'form_params' => [
                        'key' => '5add883b3ab540d2b474aab16511720b',
                        'token' => '41144a4687c86d7c14b9e9e1d8a010e63b4b9c0ef04b788306dba21b4a5e42bf',
                        'text' => $texto
                    ]
                ]
            );
            $mensagem = "Gravado com sucesso";

        } catch(\Exception $e){
            $mensagem = $e->message();
        }
        
        return $message;
    }
}
