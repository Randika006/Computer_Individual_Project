<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerLogin;

use \Illuminate\Http\Response;

class RegisterCustomerController extends Controller
{
    function CustomerReg(Request $req){
        
        try{
            $CustomerLog=new CustomerLogin;
            $CustomerLog->user=$req->user;
            $CustomerLog->pass=$req->pass;
            $CustomerLog->save();
            return redirect()->to('/HGV');


        }catch(Exception $e){
            echo "Operation Failed";
        }
        

    }

   
}
