<?php

namespace app\ocp\right\department;

class Seller implements IDepartment
{
    public function calculateCommission(int $salesInMonth)
    {
        return 0;
    }
}