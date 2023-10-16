<?php

namespace App\Http\Controllers;

use App\Models\NewsCategory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Exists;

use function PHPUnit\Framework\isNull;

class NewsCategoryController extends Controller
{
    public function index(){
        $cat = NewsCategory::all();
        
        return response()->json([
            'status' => 'success',
            'items' => $cat,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string'
        ]); 

        $cat = NewsCategory::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'News Category created successfully',
            'item' => $cat,
        ], 201);
    }


    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string'
        ]); 

        if($request->has('id')) {
            $cat = NewsCategory::find($request->id);
            if(!isNull($cat)){
                $cat->name= $request->name;
                $cat->description = $request->description;
                $cat->save();

                return response()->json([
                    'status' => 'updated',
                    'todos' => $$cat,
                ]);
            }
        }
    }
}
