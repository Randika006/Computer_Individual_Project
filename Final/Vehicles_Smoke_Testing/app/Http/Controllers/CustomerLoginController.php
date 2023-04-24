<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerLogin;
use \Illuminate\Http\Response;
use DB;

class CustomerLoginController extends Controller
{
    function CustomerLoginSystem(Request $req){
        $user= $req ->input('user');
        $pass= $req ->input('pass');
       
        $checkLogin=DB::table('customer_logins')->where(['user'=>$user,'pass'=>$pass])->get();
        if(count($checkLogin) > 0){
 
            //return redirect()->to('/HGV');
            return redirect()->to('./charts/chart.html');

        }else{
            return redirect()->to('/CusError');


           
        }
 
 
     }


}
