<?php

namespace ChatBoot\Mensagem;


interface Mensagem
{
    public function __construct(int $recipientId);

    public function sendMessage(string $mensagem): array;

}