<?php
namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Symfony\Component\Console\Input\Input;

class UserController extends Controller
{
    public function index()
    {   $roles=Role::all();
        $users = User::all();
        return view('pages.user.index',compact('users'),compact('roles'));
    }
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('pages.user.show', compact('user'));
    }
    public function dashboard(){
        return view('pages.user.dashboard');
    }
    public function update(Request $request, $id){
        $user = User::findOrFail($id);
        if (!$user) {
            abort(404); 
        }
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'nullable|string|min:8|confirmed', 
        ]);
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        if (!empty($validatedData['password'])) {
            $user->password = bcrypt($validatedData['password']);
        }
        $user->save();
            return redirect()->back()->with('success', 'User successfully updated.');
    }
    public function destroy(User $user){
        $user->delete();
            return redirect()->route('users.index')->with('success', 'User successfully deleted.');
    }

}

