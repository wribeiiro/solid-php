<?php

namespace app\ocp\right\department;

class Coordinator implements IDepartment
{
    public function calculateCommission(int $salesInMonth)
    {
        return $salesInMonth * 0.2;
    }
}