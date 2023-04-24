<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VehiclesDetails;
use \Illuminate\Http\Response;
use DB;


class ViewVehiclesController extends Controller
{
    public function show()
    {
        //
        $SVD = DB::select('select * from vehicles_details');
        return view('SVDetails',['SVD'=>$SVD]);
    }

}
