<?php

namespace ChatBoot\Mensagem;

use PHPUnit\Framework\TestCase;

class TextTest extends TestCase
{

    public function testRetornaArray(){
        $actual = (new Text(1))->sendMessage('primeira mensagem');
        $expected = [
          'recipient' => [
              'id' => 1
          ],
          'message' => [
              'text' => 'primeira mensagem',
              'metadado' => 'DEVELOPER_DEFINED_METADATA'
          ]
        ];

        $this->assertEquals($expected,$actual);
    }
}