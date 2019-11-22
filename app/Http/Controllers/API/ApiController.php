<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Division;
use App\District;

class ApiController extends Controller
{
    public function divisions(){
        $divisions=Division::all();
        return response()->json([
            'data'=>$divisions,
            'error'=>false
        ]);
    }
    public function districts($division_id){
        $districts=District::where('division_id',$division_id)->get();
        return response()->json([
            'data'=>$districts,
            'error'=>false
        ]);
    }
}
