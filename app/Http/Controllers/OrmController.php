<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categotie; 

class OrmController extends Controller
{
    public function consulta(){
        $categories = Categotie::all();
        return response()->json($categories);
    }
}