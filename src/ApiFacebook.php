<?php

namespace ChatBoot;


use GuzzleHttp\Client;

class ApiFacebook
{
    const URL = 'https://graph.facebook.com/v2.6/me/messageser';

    /** @var string */
    private $accessToken;

    /**
     * ApiFacebook constructor.
     * @param string $accessToken
     */
    public function __construct(string $accessToken)
    {
        $this->accessToken = $accessToken;
    }

    /**
     * @param array $mensagem
     * @param null $url
     * @param string $method
     * @return string
     */
    public function sendRequest(array $mensagem, $url = null, $method = 'POST') :string
    {
        $cliente = new Client();
        $url = $url ?? self::URL;

        $resposta = $cliente->request($method,$url,[
            'json' => $mensagem,
            'query' => ['accessToken' => $this->accessToken]
        ]);

        return (string)$resposta->getBody();
    }


}