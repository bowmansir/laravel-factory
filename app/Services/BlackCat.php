<?php
namespace App\Services;

class BlackCat implements LogisticsInterface
{
    public function calculaterFee($weight)
    {
        // TODO: Implement calculaterFee() method.
        return 100 * $weight * 10;
    }
}