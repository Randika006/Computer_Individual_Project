<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login;
use \Illuminate\Http\Response;
use DB;



class LoginController extends Controller
{
    function LoginSystem(Request $req){
        $user= $req ->input('user');
        $pass= $req ->input('pass');
       
        $checkLogin=DB::table('logins')->where(['user'=>$user,'pass'=>$pass])->get();
        if(count($checkLogin) > 0){
 
            //return redirect()->to('/add');
            return redirect()->to('./Dashboard/index.html');

        }else{
            return redirect()->to('/OfficerError');


           
        }
 
 
     }


    }
