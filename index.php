<?php

use app\ocp\right\Employee;
use app\ocp\right\department\Coordinator;
use app\ocp\right\department\Director;
use app\ocp\right\department\Seller;
use app\ocp\right\department\Supervisor;

require_once './vendor/autoload.php';

$employee = new Employee('Wellisson', 4005.08, new Coordinator());
echo "<h2>{$employee->getName()}: R$ {$employee->getSalary(245)} Comissão: {$employee->getCommission()} </h2>";
$employee = new Employee('Wellisson2', 4005.08, new Director());
echo "<h2>{$employee->getName()}: R$ {$employee->getSalary(455)} Comissão: {$employee->getCommission()} </h2>";
$employee = new Employee('Wellisson3', 4005.08, new Seller());
echo "<h2>{$employee->getName()}: R$ {$employee->getSalary(3455)} Comissão: {$employee->getCommission()} </h2>";
$employee = new Employee('Wellisson4', 4005.08, new Supervisor());
echo "<h2>{$employee->getName()}: R$ {$employee->getSalary(4443)} Comissão: {$employee->getCommission()} </h2>";