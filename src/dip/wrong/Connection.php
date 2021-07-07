<?php

namespace app\dip\wrong;

use app\dip\wrong\sgbd\MySQL;

class Connection
{
    public function __construct(MySQL $mysql)
    {
        $mysql->connect();
        echo '<br>';
        $mysql->insert();
        echo '<br>';
        $mysql->update();
    }
}