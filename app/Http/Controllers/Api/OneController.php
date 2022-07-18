<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\One;
use App\Two;
use Illuminate\Support\Facades\DB;

class OneController extends Controller
{
    public function getOne() {

        $One = One::with(array('twos'=>function($query){

            $query->where('experience', '>', 2);

            $query->select('id', 'one_id');

        }))->get(['id', 'name']);


        $mek = One::pluck('id');

        $two = [];

        foreach($mek as $m){
    
        $two[] = Two::where('one_id', '=', $m)->where('experience', '>', 2)->sum('salary');

        }

        $count = array_sum($two);


        return response()->json([$One, "Count" => $count]);
    }

}