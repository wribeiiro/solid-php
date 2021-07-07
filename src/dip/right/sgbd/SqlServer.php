<?php

namespace app\dip\right\sgbd;

class SqlServer implements ISgbd
{
    public function getName()
    {
        return 'SqlServer Versão 1.45';
    }

    public function connect()
    {
        echo 'Conectando no SqlServer';
    }

    public function insert()
    {
        echo 'INSERT no SqlServer';
    }

    public function update()
    {
        echo 'UPDATE no SqlServer';
    }

    public function delete()
    {
        echo 'DELETE no SqlServer';
    }

    public function queryAll()
    {
        echo 'Query All no SqlServer';
    }
}