<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index(){
        $data = Type::with('projects')->get();
        return response()->json($data);
    }

    public function show(string $slug){
        $data = Type::with('projects')->where('slug', $slug)->first();

        try{
            if($data){
                return response()->json($data);
            }else {
                return response()->json([
                    'success'=>false,
                    'results'=>null
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
