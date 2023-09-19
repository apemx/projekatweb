<?php
namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Properties;
use App\Models\PropertyRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles; 

    class PropertyRequestController extends Controller
    {
        public function create(){
            $user=Auth::user();
            if(!$user){
                return redirect()->route('register'); 
            }
            $properties=Properties::all();
            return view('pages.user.property_requests.create',compact('properties'));
        }
        public function show($id){
            $propertyRequests=PropertyRequest::findOrFail($id);
            return view('pages.user.property_requests.show',compact('propertyRequests'));
        }
        public function edit($id){
            $propertyRequests=PropertyRequest::findOrFail($id);
            return view('pages.user.property_requests.show',compact('propertyRequests'));
        }
        public function index(){
            $userID = auth()->user()->id;
            $propertyRequests = PropertyRequest::where('user_id', $userID)->get();
            return view('pages.user.property_requests.index',compact('propertyRequests'));
        }
        public function store(Request $request)
        {
            $validatedData = $request->validate([
                'property_id' => 'required',
                'message' => 'required|string',   
            ]);
            $validatedData['user_id'] = auth()->user()->id;
            PropertyRequest::create($validatedData);
            return redirect()->route('property_requests.index')->with('success', 'The property request has been successfully submitted.');
        }
        public function destroy($id){
            $request=PropertyRequest::findOrFail($id);
            $request->delete();
            return redirect()->back();
        }

    }
