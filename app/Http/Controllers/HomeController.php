<?php

namespace App\Http\Controllers;

// $array = array(47,520,30,518,40,70,10,50);

// $max=$max2=0;

// for ($i = 0; $i < count($array); $i++) {
//     if ($array[$i] > $max) {

//         $max = $array[$i];

//     } else if (($array[$i] > $max2) && ($array[$i] != $max)) {

//         $max2 = $array[$i];

//     }
// }

// echo "Highest Value is : " . $max . "<br/>"; 
// echo "Second highest value is : " . $max2 . "<br/>"; 



// $a = 1;
// $b = 2;

// list($b, $a) = array($a, $b); -> 2, 1 => 1, 2:

// a = 2,

// b = 1

// echo $a . $b;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

}
