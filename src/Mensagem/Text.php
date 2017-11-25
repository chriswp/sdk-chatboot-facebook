<?php

namespace ChatBoot\Mensagem;


class Text
{

    private $recipientId;

    public function __construct(int $recipientId)
    {
        $this->recipientId = $recipientId;
    }

    public function sendMessage(string $mensagem): array
    {
        return [
            'recipient' => [
                'id' => $this->recipientId
            ],
            'message' => [
                'text' => $mensagem,
                'metadado' => 'DEVELOPER_DEFINED_METADATA'
            ]
        ];
    }

}