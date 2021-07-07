<?php

namespace app\isp\wrong;

class Pardal implements IFlyingBird
{
    public function fly()
    {
        echo 'Voando com alegria';
    }

    public function eat()
    {
        echo 'Vou comer de tudo!';
    }

    public function walk()
    {
        echo 'Caminhando, cantando e sorrindo';
    }
}