<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\login;

use \Illuminate\Http\Response;


class RegisterOfficerController extends Controller
{
    function OfficerReg(Request $req){
        
        try{
            $LG=new login;
            $LG->user=$req->user;
            $LG->pass=$req->pass;
            $LG->save();
            return redirect()->to('/add');


        }catch(Exception $e){
            echo "Operation Failed";
        }
        

    }



}
