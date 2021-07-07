<?php

namespace app\ocp\wrong;

class Employee
{
    private string $name;
    private float $salary;
    private string $department;
    private float $commission = 0;

    public function __construct(
        string $name, 
        float $salary, 
        string $department
    )
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->department = $department;
    }

    public function getSalary(int $saleInMonth)
    {
        if ($this->department === 'coordenador') {
            $this->commission = ($saleInMonth * 0.2);
        } else if ($this->department === 'supervisor') {
            $this->commission = ($saleInMonth * 0.3);
        } else if ($this->department === 'diretor') {
            $this->commission = ($saleInMonth * 0.4);
        }

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