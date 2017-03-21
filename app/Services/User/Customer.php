<?php
namespace App\Services\User;

class Customer extends AbstractUser
{
    public function show()
    {
        echo('I am a customer');
    }
}