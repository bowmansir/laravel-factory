<?php
namespace App\Services;

class PostOffice implements LogisticsInterface
{
    public function calculaterFee($weight)
    {
        // TODO: Implement calculaterFee() method.\
        return 70 * $weight * 20;
    }
}