<?php

namespace App\Http\Controllers\agent;

use App\Http\Controllers\Controller;
use App\Models\PropertyRequest;
use Illuminate\Http\Request;

class HistoryResponceController extends Controller
{
    public function index(){
        $perPage=5;
        $propertyRequests=PropertyRequest::where('response','!=','null')->paginate($perPage);
        return view('pages.agent.history.index',compact('propertyRequests'));
    }
    public function show($id){
      $propertyRequests=PropertyRequest::findOrFail($id);
      return view('pages.agent.history.show',compact('propertyRequests'));
    }
    public function destroy($id){
      $properties= PropertyRequest::findOrFail($id);
      $properties->delete();
      return redirect()->back();
    }

  
 
}
