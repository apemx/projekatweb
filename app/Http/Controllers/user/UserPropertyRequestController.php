<?php
namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use App\Models\PropertyRequest;
use Illuminate\Http\Request;

class UserPropertyRequestController extends Controller
{
    public function index(){
        $perPage=3;
        $propertyRequests=PropertyRequest::whereNull('response')->paginate($perPage);
        return view('pages.agent.response.index', compact('propertyRequests'));
    }
    public function show($id){
        $propertyRequests=PropertyRequest::findOrFail($id);
        if(!$propertyRequests){
            abort(404);
        }
        return view('pages.agent.response.show',compact('propertyRequests'));
    }
    public function create(){
        if (auth()->check()) {
            return view('pages.agent.response.create', compact('properties'));
        } else {
            return redirect()->route('login'); 
        }
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
