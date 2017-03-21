<?php
namespace App\Services;

class Hsinchu implements LogisticsInterface
{
    public function calculaterFee($weight)
    {
        // TODO: Implement calculaterFee() method.
        return 80 * $weight * 15;
    }
}