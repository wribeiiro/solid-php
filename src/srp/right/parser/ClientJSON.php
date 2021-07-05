<?php 

namespace app\srp\right\parser;

use app\srp\right\Client;

class ClientJSON extends ClientParserAbstract
{
    protected function parse() 
    {
        $filePath = $this->dataPath . '/birthday-list.json';
        $jsonHandler = json_decode(file_get_contents($filePath));

        foreach ($jsonHandler->aniversariantes as $row) {
            $client = new Client($row->nome, $row->email, new \DateTime($row->data_nascimento));
            $this->clients[] = $client;
        }
    }
}