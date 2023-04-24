<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VehiclesDetails;

use \Illuminate\Http\Response;


class VDetailsController extends Controller
{
    //
    function addData(Request $req){
        
        try{
            $VD=new VehiclesDetails;
            $VD->ftype=$req->ftype;
            $VD->etype=$req->etype;
            $VD->lnum=$req->lnum;
            $VD->vmodel=$req->vmodel;
            $VD->save();
            return redirect()->to('/view');


        }catch(Exception $e){
            //return redirect('add')->with('failed',"operation failed"); 
            echo "Operation Failed";
 
        }
        

    }

}
