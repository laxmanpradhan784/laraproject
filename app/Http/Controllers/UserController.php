<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser(){
        return "laxman pradhan";
    }

    function aboutuser(){
        return "this is me";
    }

    function username(){
        return "get username";
    }
    function usern($name) {
        // return "get username " . $name;
        // echo "hello this is " . $name;
        return view('getuser', ['name' => $name]);
    }
    

    function getadmin(){
        // return "laxman pradhan";
        return view('use');
    }

    

}
