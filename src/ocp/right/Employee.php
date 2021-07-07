<?php

namespace app\ocp\right;

use app\ocp\right\department\IDepartment;

class Employee
{
    private string $name;
    private float $salary;
    private IDepartment $department;
    private float $commission = 0;

    public function __construct(
        string $name, 
        float $salary, 
        IDepartment $department
    )
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->department = $department;
    }

    public function getSalary(int $saleInMonth)
    {
        $this->commission = $this->department->calculateCommission($saleInMonth);
        return $this->salary + $this->commission;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getCommission(): float
    {
        return $this->commission;
    }

    /**
     * @param string $name
     * @return Employee
     */
    public function setName(string $name): Employee
    {
        $this->name = $name;
        return $this;
    }
}