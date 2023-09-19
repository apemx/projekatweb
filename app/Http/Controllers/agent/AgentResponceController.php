<?php

namespace App\Http\Controllers\agent;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PropertyRequestController;
use App\Models\Properties;
use App\Models\PropertyRequest;
use Illuminate\Http\Request;



class AgentResponceController extends Controller
{

    public function search(Request $request){
        
        $q = $request->input('search');
        $users = PropertyRequest::whereHas('user', function($query) use ($q) {
            $query->where('name', 'LIKE', "%$q%");
        })->get();
        return view('pages.agent.response.search',compact('users'));
        
    }

    public function index(){
        $perPage=3;
        $propertyRequests=PropertyRequest::whereNull('response')->paginate($perPage);
        return view('pages.agent.response.index', compact('propertyRequests'));
    }

    public function show($id){
        
        $propertyRequests=PropertyRequest::findOrFail($id);
        return view('pages.agent.response.show',compact('propertyRequests'));
    }

   public function create(){
        return view('pages.agent.response.create',compact('properties'));
    }

 

    public function store(Request $request, $id){
    $propertyRequest = PropertyRequest::findOrFail($id);
        $validatedData = $request->validate([
            'response' => 'required|string',
        ]);
        $propertyRequest->response = $validatedData['response'];
        $propertyRequest->save();
        return redirect()->route('agent.property_requests.index')->with('success', 'A reply has been sent.');
    }

 

    public function destroy($id){
        $properties= PropertyRequest::findOrFail($id);
        $properties->delete();
        return redirect()->back();
    }
}
