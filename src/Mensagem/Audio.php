<?php

namespace ChatBoot\Mensagem;


class Audio implements Mensagem
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
                'attachment' => [
                    'type' => 'audio',
                    'payload' => [
                        'url' => $mensagem
                    ]
                ]
            ]
        ];
    }

}