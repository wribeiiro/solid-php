<?php

use app\dip\right\sgbd\Oracle;
use app\dip\right\sgbd\PostgreSQL;
use app\dip\right\sgbd\SqlServer;
use app\dip\right\Connection;
use app\dip\right\sgbd\MySQL;

require_once './vendor/autoload.php';

$conOra = new Connection(new Oracle());
$conPg = new Connection(new PostgreSQL());
$conSql = new Connection(new SqlServer());
$conMySql = new Connection(new MySQL());