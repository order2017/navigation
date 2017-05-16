<?php

namespace App\Http\Controllers\Home;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Ixudra\Curl\Facades\Curl;

class IndexController extends Controller
{
    public function index(){
        /*$curl = Curl::to('http://restapi.amap.com/v3/geocode/geo?key=81cdc42cf538db3cf36587a178fe16d2&address=金源科技有限公司&city=深圳')->get();
        $arr = json_decode($curl,1);
        dd($arr);*/
        echo '1';
    }

    public function StoreList(){
        return view('home.store-list');
    }

    public function Store(Request $request){
        //dd($request->all());
        $name = $request->get('name');
        $shop = $request->get('shop');
        $city = $request->get('city');
        $add = $request->get('add');

        $curl = Curl::to('http://restapi.amap.com/v3/geocode/geo?key=81cdc42cf538db3cf36587a178fe16d2&address='.$shop.'&city='.$city.'')->get();
        $arr = json_decode($curl,1);

        if (isset($arr['geocodes']['0']['location'])){
            $user =new User();
            $user->name = $name;
            $user->shop = $shop;
            $user->province = $arr['geocodes']['0']['province'];
            $user->city = $arr['geocodes']['0']['city'];
            $user->formatted_address = $arr['geocodes']['0']['formatted_address'];
            $user->location = $arr['geocodes']['0']['location'];
            $user->add = $add;
            $user->save();
        }else{
            $curl = Curl::to('http://restapi.amap.com/v3/geocode/geo?key=81cdc42cf538db3cf36587a178fe16d2&address='.$add.'&city='.$city.'')->get();
            $arr = json_decode($curl,1);

            $user =new User();
            $user->name = $name;
            $user->shop = $shop;
            $user->province = $arr['geocodes']['0']['province'];
            $user->city = $arr['geocodes']['0']['city'];
            $user->formatted_address = $arr['geocodes']['0']['formatted_address'];
            $user->location = $arr['geocodes']['0']['location'];
            $user->add = $add;
            $user->save();
        }

        return redirect()->back();

    }
}
