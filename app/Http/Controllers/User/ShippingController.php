<?php

namespace App\Http\Controllers\User;

use App\Services\LogisticsInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShippingController extends Controller
{
    private $logistics;

    public function __construct(LogisticsInterface $logistics)
    {
        $this->logistics = $logistics;
    }

    public function calculateFee($weight)
    {
        return $this->logistics->calculaterFee($weight);
    }
}
