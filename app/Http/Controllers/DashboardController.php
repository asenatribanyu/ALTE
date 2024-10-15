<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class DashboardController extends Controller
{
    public function docMahasiswa(){

    }
    public function manageUsers(){
        $user = User::where('role','mahasiswa')->get();
        return view('admin/pages/manageUsers',['users'=> $user]);

    }
    public function deleteUser(User $user){
        $user->delete();
        return redirect()->back();

    }
    public function createUser(Request $request)
    {

        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'npm' => ['required', 'string', 'max:255', Rule::unique(User::class)],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => ['required', 'string', Password::default(), 'confirmed'],
        ]);
        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'npm' => $validatedData['npm'],
            'email_verified_at'=> date('Y-m-d H:i:s'),
            'password' => Hash::make($validatedData['password']),
            'role' => 'mahasiswa',
        ]);

        return redirect()->back()->with('success', 'User created successfully!');
    }
}
