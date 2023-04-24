<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VehiclesDetails;
use \Illuminate\Http\Response;
use DB;


class VehiclesUpdateController extends Controller
{
    public function show2($id) {
        $SVD = DB::select('select * from vehicles_details where id = ?',[$id]);
        return view('VehicleUpdate',['SVD'=>$SVD]);
    }

    public function edit(Request $request,$id) {
        $ftype = $request->input('ftype');
        $etype = $request->input('etype');
        $lnum = $request->input('lnum');
        $vmodel = $request->input('vmodel');
        DB::update('update vehicles_details set ftype = ?,etype=?,lnum=?,vmodel=? where id = ?',[$ftype,$etype,$lnum,$vmodel,$id]);
        return redirect()->to('/view');

    }

    public function destroy($id) {
        DB::delete('delete from vehicles_details where id = ?',[$id]);
        return redirect()->to('/view');
     }


}
