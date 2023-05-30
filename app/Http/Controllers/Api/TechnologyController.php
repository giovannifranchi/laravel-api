<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    public function index(){
        $data = Technology::all();
        return response()->json($data);
    }

    public function show(string $slug){
        $data = Technology::where('slug', $slug)->first();
        // ->with('projects')->first();

        try{
            if($data){
                return response()->json($data);
            }else {
                return response()->json([
                    'success'=>false,
                    'result'=>null
                ], 404);
            }
        }catch(\Throwable $th){
            return response()->json([
                'success'=>false,
                'result'=>null
            ], 500);
        }
    }
}
