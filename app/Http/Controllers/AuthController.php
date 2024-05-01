<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signin(){

        return   view('components/header')
                .view('authentication/sign-in')
                .view('components/footer');

    }
    public function signup(){

        return   view('components/header')
                .view('authentication/sign-up')
                .view('components/footer');

    }

}
