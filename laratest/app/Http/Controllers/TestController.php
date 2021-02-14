<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public  function index()
    {
        //return "Hello from my first Laravel App!";
        return view("test.index");
    }

    public function show(){
        $r = rand(0, 1000);
        $title = "Пример использование Blade";
        $countries = ["Ukraine", "Italy", "Spain", "Sweden"];
        return view("test.countries", array("rand"=>$r, "title"=>$title, "countries"=>$countries));
    }
}
