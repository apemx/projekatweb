<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    

    public function dashboard()
    {
    
        return view('pages.admin.dashboard');
    }
    public function assignRole(Request $request, User $user)
    {
        $roleToAssign = $request->input('role');
        if ($user) {
            $user->syncRoles([$roleToAssign]);
            
            return redirect()->back()->with('success', 'You have successfully assigned a role!');
        }
        return redirect()->back()->with('error', 'The user is not found.');
    }
    public function addUser(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'contact'=>['required','numeric']
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'contact'=>$request->contact
        ]);
        $user->assignRole($request->role);
        return redirect()->back()->with('success', 'Uspesno ste dodali usera!');
    }
    
}
