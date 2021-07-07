<?php

namespace app\dip\right\sgbd;

class Oracle implements ISgbd
{
    public function getName()
    {
        return 'Oracle Versão 1.45';
    }

    public function connect()
    {
        echo 'Conectando no Oracle';
    }

    public function insert()
    {
        echo 'INSERT no Oracle';
    }

    public function update()
    {
        echo 'UPDATE no Oracle';
    }

    public function delete()
    {
        echo 'DELETE no Oracle';
    }

    public function queryAll()
    {
        echo 'Query All no Oracle';
    }
}