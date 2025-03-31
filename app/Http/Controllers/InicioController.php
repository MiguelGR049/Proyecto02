<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller{
    public function welcome(){
        return view("pages.welcome",["titulo"=>"Bienvenidos"]);
    }
    public function inicio(){
        return view("pages.inicio",["titulo"=>"Inicio"]);
    }
    public function login(){
        return view("pages.login",["titulo"=>"Login"]);
    }
    public function registro(){
        return view("pages.registro",["titulo"=>"Registro"]);
    }
    public function ajuste(){
        return view("pages.ajuste",["titulo"=>"Ajustes"]);
    }
}
