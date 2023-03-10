<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VehiclesDetails;

use \Illuminate\Http\Response;
use DB;


class SearchController extends Controller
{
    function search(Request $request){

        if(isset($_GET['lnum'])){

            $search_text=$_GET['lnum'];
            $vehicles_details=DB::table('vehicles_details')->where('lnum','LIKE','%'.$search_text.'%')->get();
            return view('search',['vehicles_details'=>$vehicles_details]);

        }else{
            return view('search');

        }
       
     
    }

}
