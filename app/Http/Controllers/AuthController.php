<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        echo "Login EndPoint Requested";
    }

    public function signup(){
        echo "Signup EndPoint Requested";
    }
    public function index(){
        echo "Hello World";
    }
}
