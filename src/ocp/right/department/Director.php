<?php

namespace app\ocp\right\department;

class Director implements IDepartment
{
    public function calculateCommission(int $salesInMonth)
    {
        return $salesInMonth * 0.4;
    }
}