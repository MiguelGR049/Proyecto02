<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller{
    public function index(){
        return view("inicio");
    }
    public function login(){
        return view("login");
    }
    public function registro(){
        return view("registro");
    }
    public function ajuste(){
        return view("ajuste");
    }
    public function home(){
        return view("home");
    }

}
