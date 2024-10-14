<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    function index() {
        echo "Hello JING!";
    }
}