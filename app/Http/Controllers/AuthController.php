<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string|in:admin,official,user' // Pastikan role hanya salah satu dari ini
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // Setel role untuk pengguna (role default atau role tertentu)
        $roleName = $validatedData['role']; // Role dari input pengguna
        $role = Role::where('name', $roleName)->first();
        $user->role()->associate($role);
        $user->save();

        Auth::login($user);

        return redirect()->route('home'); // Sesuaikan dengan route yang sesuai untuk halaman utama Anda
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($validatedData)) {
            return redirect()->intended(route('home')); // Sesuaikan dengan route untuk halaman utama setelah login
        }

        return back()->withErrors([
            'email' => 'Kredensial yang diberikan tidak cocok dengan catatan kami.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login'); // Sesuaikan dengan route login
    }
}
