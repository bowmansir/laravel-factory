<?php
namespace App\Services\User;

class Admin extends AbstractUser
{
    public function show()
    {
        echo('I am a admin');
    }
}