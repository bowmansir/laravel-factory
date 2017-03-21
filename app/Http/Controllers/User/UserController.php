<?php

namespace App\Http\Controllers\User;

use App\Services\LogisticsFactory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\UserService;

class UserController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function show()
    {
        $this->userService->show('admin');
    }

    public function index($companyName, $weight)
    {
        $logistics = LogisticsFactory::create($companyName);
        return $logistics->calculaterFee($weight);
    }
    
}
