<?php

class RegisterController
{
    public function register($data)
    {
        if (!$data->name) {
            throw new Exception('No username');
        }

        if (!$this->isValidPassword($data->password)) {
            throw new Exception('Password is too short');
        }

        if ($data->password !== $data->passwordRepeat) {
            throw new Exception('Password does not match');
        }

        $user = $this->getUser($data->id);
        if (!$user) {
            throw new Exception('User not found');
        }

        return $this->createUser($data);
    }
}


