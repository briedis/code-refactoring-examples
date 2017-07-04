<?php

class UserService
{
    public function register($firstName, $lastName, $email, $password, $age, $newParameter)
    {
        // Register user
    }
}

class UserService
{
    public function register(array $user)
    {
        $user['email'];
    }
}

class UserService
{
    public function register(UserItem $user)
    {
        $user->email;
    }
}

class UserItem
{
    public $firstName;

    public $lastName;

    public $email;

    public $password;

    public $age;

    public $gender;
}