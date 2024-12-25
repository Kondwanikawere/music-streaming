<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        sleep(1);
        $fields = $request->validate([
            'firstName' => ['required', 'max:255'],
            'surname' => ['required', 'max:255'],
            'username' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', 'max:255']
        ]);

        $user = user::create($fields);
        Auth::login($user);
         
        return redirect()->route('home');
    }

    public function login(Request $request)
    {
        
        $fields = $request->validate([
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required','max:255']
        ]);

        if(Auth::attempt($fields, $request->remember)){
            $request->session()->regenerate();

            return redirect()->intended('latest');
        }

        return back()->withErrors([
            'email' => 'The provided credential do not match our records.'
        ])->onlyInput('email');
    }

    public function logout(request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
