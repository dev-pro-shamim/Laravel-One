<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoCoontroller extends Controller
{
    //
    function demo1(){
        return 'Hello World';

    }

    function demo2(){
        return view('demo2');
    }


   function demo3(){
        return view('demo3');
    }

}
