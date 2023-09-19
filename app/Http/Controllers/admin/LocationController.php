<?php


namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(){
        $locations=Location::all();
        return view('pages.admin.location.index',compact('locations'));
    }
    public function store(Request $request){
        $Location=new Location();
        $Location->name=$request->name;
        $Location->save();
        return redirect()->back();
    }
    public function update(Request $request,$id){
        $Location = Location::findOrFail($id);
        if (!$Location) {
            abort(404); 
        }
        $Location->name=$request->name;
        $Location->save();
        return redirect()->back();
    }
    public function destroy($id){
       $locations=Location::findOrFail($id);
       $locations->delete();
        return redirect()->back();
    }
}
