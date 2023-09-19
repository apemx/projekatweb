<?php
namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use App\Models\Properties;
use Illuminate\Http\Request;
   class UserPropertiesController extends Controller
   {
      public function index(){
      $perPage = 2;
      $properties = Properties::paginate($perPage);
      return view('pages.user.properties.index',compact('properties'));
      }
   }
