<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InternalParam;
use \Illuminate\Http\Response;
use DB;


class ReportController extends Controller
{
    public function ShowReport()
    {
        //
        $RP = DB::select('select * from internal_params');
        return view('report',['RP'=>$RP]);
    }

    public function destroy($id) {
        DB::delete('delete from internal_params where id = ?',[$id]);
        return redirect()->to('/display');
     }



}
