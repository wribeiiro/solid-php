<?php

namespace app\dip\right\sgbd;

class MySQL implements ISgbd
{
    public function getName()
    {
        return 'MySQL Versão 1.45';
    }

    public function connect()
    {
        echo 'Conectando no MySQL';
    }

    public function insert()
    {
        echo 'INSERT no MySQL';
    }

    public function update()
    {
        echo 'UPDATE no MySQL';
    }

    public function delete()
    {
        echo 'DELETE no MySQL';
    }

    public function queryAll()
    {
        echo 'Query All no MySQL';
    }
}