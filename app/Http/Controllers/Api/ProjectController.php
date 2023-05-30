<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(){
        $data = Project::with('type', 'technologies')->get();
        return response()->json($data);
    }

    public function show($id){
        try{
            $data = Project::where('id', $id)->with('type', 'technologies', 'comments')->first();

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
                'success' => false,
                'results' => null
            ], 500);
        }
    }
}
