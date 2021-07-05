<?php

namespace app\srp\wrong;

class BirthdayLayout
{
    public function getContent(Client $client): string
    {
        return "
            <h1>{$client->getName()}</h1>
            <h3>Hoje é {$client->getBirthDate()->format('d/m/Y')}! o seu dia!</h3>
        ";
    }
}