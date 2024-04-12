<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AkunController extends Controller
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
        return view('menu.login.akun');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|regex:/^(?=.*[a-zA-Z])(?=.*\d)[a-zA-Z0-9]{8,}$/'
        ]);


        $validateData['password'] = bcrypt($validateData['password']);
        if (User::create($validateData)) {
            $title = 'Akun berhasil dibuat!';
            $type = 'success';
            $posision = 'top-right';
            toast($title, $type, $posision);
            return redirect('/akun/create')->with('success', 'Akun berhasil dibuat!');
        } else if (!User::create($validateData)) {
            $title = 'Akun gagal dibuat!';
            $type = 'error';
            $posision = 'top-right';
            toast($title, $type, $posision);
            return redirect('/akun/create')->with('error', 'Akun gagal dibuat!');
        }
    }


    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        $title = 'email atau password salah!';
        $type = 'error';
        $posision = 'top-right';
        toast($title, $type, $posision);
        return back();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Akun $akun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Akun $akun)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Akun $akun)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Akun $akun)
    {
        //
    }
}
