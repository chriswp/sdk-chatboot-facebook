<?php

namespace ChatBoot;

use ChatBoot\Mensagem\Text;
use \PHPUnit\Framework\TestCase;

class ApiFacebookTest extends TestCase
{

    /**
     * @expectedException  \GuzzleHttp\Exception\ClientException
     */
    public function testMakeRequest(){
        $mensagem = (new Text(1))->sendMessage('mensagem teste');
        (new ApiFacebook('28sj82'))->sendRequest($mensagem);
    }
}