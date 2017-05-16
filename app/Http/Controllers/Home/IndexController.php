<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Ixudra\Curl\Facades\Curl;

class IndexController extends Controller
{
    public function index(){
        $curl = Curl::to('http://restapi.amap.com/v3/geocode/geo?key=81cdc42cf538db3cf36587a178fe16d2&address=盈丰大厦&city=东莞')->get();
        $arr = json_decode($curl,1);
        dd($arr);
    }
}
