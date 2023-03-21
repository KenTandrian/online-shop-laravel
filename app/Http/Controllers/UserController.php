<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $user = User::get();
        return view('admin.user.index', compact('user'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $nama = $request->nama;
        $email = $request->email;
        $password = bcrypt($request->password);

        $user = new User;
        $user->name = $nama;
        $user->email = $email;
        $user->password = $password;
        $user->attachRole('admin');
        $user->attachRole('member');
        $user->save();

        return redirect('admin/user');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.update', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $nama = $request->nama;
        $email = $request->email;
        $password = bcrypt($request->password);

        $user = User::find($id);
        $user->name = $nama;
        $user->email = $email;
        $user->password = $password;
        $user->attachRole('admin');
        $user->attachRole('member');
        $user->save();

        return redirect('admin/user');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('admin/user');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
