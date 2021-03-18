<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\M_Provinsi;

class Api extends Controller
{
    //api get provinsi
    public function CariProvinsiByName(Request $request){
        $data = M_Provinsi::where('provinsi','like','%'.$request->provinsi.'%')->get();
        return response()->json([
            'status' => 'true',
            'data' => $data
          ]);
    }
    public function CariProvinsiByID(Request $request){
        $dataprov = M_Provinsi::where('id_provinsi',$request->id_provinsi)->get();
        return response()->json([
            'status' => 'true',
            'data' => $dataprov
          ]);
    }
}
