<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\Location;
use App\Models\Properties;
use App\Models\Type;
use Illuminate\Http\Request;

class AdminPropertiesController extends Controller
{
    public function index(){
        $perPage=3;
        $properties=Properties::paginate($perPage);
        return view('pages.admin.properties.index', compact('properties'));
    }
   
    public function create(){
        $locations=Location::all();
        $types=Type::all();
        $properties=Properties::all();
        return view('pages.admin.properties.create', compact('properties', 'locations', 'types'));
    }
    public function edit($id){
        $locations = Location::all();
        $types = Type::all();
        $properties = Properties::findOrFail($id);
        return view('pages.admin.properties.edit', compact('properties', 'locations', 'types'));
    }
    public function show($id){
        $properties=Properties::findOrFail($id);
        return view('pages.admin.properties.show',compact('properties'));
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'location_id' => 'required|exists:location,id', 
            'price' => 'required|numeric',
            'type_id' => 'required|exists:type,id',
            'description' => 'nullable|string',
        ]);

        $properties = new Properties();
        $properties->title = $validatedData['title'];
        $properties->location_id = $validatedData['location_id'];
        $properties->price = $validatedData['price'];
        $properties->type_id = $validatedData['type_id'];
        $properties->description = $validatedData['description'];
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/properties/', $filename);
            $properties->image = $filename;
        }
        $properties->save();
        return redirect()->route('admin.properties.index');
    }

    public function update(Request $request, $id)
    {
        $properties = Properties::findOrFail($id);
        // Provera da li je postavljena nova slika
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/properties/', $filename);
            $properties->image = $filename;
        }
        // Ako je neki podatak promenjen, azurirajte ga
        if ($request->filled('title')) {
            $properties->title = $request->input('title');
        }
        if ($request->filled('location_id')) {
            $properties->location_id = $request->input('location_id');
        }
        if ($request->filled('price')) {
            $properties->price = $request->input('price');
        }
        if ($request->filled('type_id')) {
            $properties->type_id = $request->input('type_id');
        }
        if ($request->filled('description')) {
            $properties->description = $request->input('description');
        }
        // Ako su neki podaci promenjeni, sacuvajte promene
        if ($properties->isDirty()) {
            $properties->save();
        }
            return redirect()->back()->with('success',"You have successfully updated");
    }

    
    public function destroy($id){
        $properties=Properties::findOrFail($id);
        $properties->delete();
         return redirect()->back();
     }
    }
    