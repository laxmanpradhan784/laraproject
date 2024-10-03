<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Facades\view;


use function Symfony\Component\VarDumper\Dumper\esc;

class UserController extends Controller
{
    function getUser()
    {
        return "laxman pradhan";
    }

    function aboutuser()
    {
        return "this is me";
    }

    function username()
    {
        return "get username";
    }
    function usern($name)
    {
        // return "get username " . $name;
        // echo "hello this is " . $name;
        return view('getuser', ['name' => $name]);
    }


    function getadmin()
    {
        // return "laxman pradhan";
        return view('use');
    }

    function admin()
    {
        // return "laxman pradhan";
        return view('admin.adminlogin');
    }

    function register()
    {
        return view('register');
    }

}
