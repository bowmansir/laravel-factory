<?php
namespace App\Services\User;

use Illuminate\Support\Facades\App;

class UserFactory
{
    public function create($type)
    {
        App::bind(AbstractUser::class, 'App\Services\User\\' . ucfirst($type));
        return App::make(AbstractUser::class);
    }
}