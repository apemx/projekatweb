<?php


namespace App\Http\Controllers\agent;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AgentController extends Controller
{
    
    public function dashboard()
    {
    
        return view('pages.agent.dashboard');
    }
}
