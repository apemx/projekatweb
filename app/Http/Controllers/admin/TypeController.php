<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index(){
        $types=Type::all();
        return view('pages.admin.type.index',compact('types'));
    }
    public function store(Request $request){
        $type=new Type();
        $type->name=$request->name;
        $type->save();
        return redirect()->back();
    }
    public function update(Request $request,$id){
        $type = Type::findOrFail($id);
        if (!$type) {
            abort(404); 
        }
        $type->name=$request->name;
        $type->save();
        return redirect()->back();
    }
    public function destroy($id){
       $type=Type::findOrFail($id);
       $type->delete();
        return redirect()->back();
    }
}
