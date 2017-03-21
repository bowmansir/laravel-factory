<?php
namespace App\Services;

use App\Services\User\UserFactory;

class UserService
{
    private $userFactory;

    public function __construct(UserFactory $userFactory)
    {
        $this->userFactory = $userFactory;
    }

    public function show($type)
    {
        $user = $this->userFactory->create($type);
        $user->show();
    }
}