<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        echo "<h1>Olá mundo! Eu sou o Matheus!</h1>";
    }
}
