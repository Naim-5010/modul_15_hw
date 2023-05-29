<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Psy\CodeCleaner\ReturnTypePass;

class demoController extends Controller
{
    // function action(){
    //     $name = "My name is naim";
    //     Log::info($name);
    //     return $name;
    // }

            // // 👀👀 Task 3: Global Middleware
//     function __construct(){
//         $this->middleware('hello');
// }


// //👀👀Task 4: Route Middleware

// function author1(){
//         return "This is a profile";
// }
// function author2(){
//         return "This is a setting";
// }


function action(){
                return view('Component.Home');
}



}
