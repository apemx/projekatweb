<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $perpage=3;
        $properties=Properties::paginate($perpage);
        return view('welcome',compact('properties'));
    }
}
