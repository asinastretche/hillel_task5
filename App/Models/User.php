<?php

namespace App\Models;

class User
{
    public function findOne()
    {
        return [
            'id' => 1,
            'login' => 'login1',
            'password' => 'password1',
            'email' => 'email1',
            'fullName' => 'fullName1'
        ];
    }

    public function findAll()
    {
        return [
            [
                'id' => 1,
                'login' => 'login1',
                'password' => 'password1',
                'email' => 'email1',
                'fullName' => 'fullName1'
            ],
            [
                'id' => 2,
                'login' => 'login2',
                'password' => 'password2',
                'email' => 'email2',
                'fullName' => 'fullName2'
            ],
            [
                'id' => 3,
                'login' => 'login3',
                'password' => 'password3',
                'email' => 'email3',
                'fullName' => 'fullName3'
            ]
        ];
    }
}