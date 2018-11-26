<?php

namespace App\Controllers;

use Core\View;
use App\Models\User;

class Users {

    public function index()
    {
        View::render('user/index.php');
    }
    public function show(){
        $users = User::getAllUsers();
        View::render('user/show.php', [
            'title' => 'Пользователи',
            'users' => $users
        ]);
    }
}
