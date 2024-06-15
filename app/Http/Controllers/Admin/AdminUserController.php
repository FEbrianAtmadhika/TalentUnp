<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    public function show()
    {
        $user = User::orderBy('id', 'asc')->get();
        return view('admin.user.show', compact('user'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $store = new User();
        $store->name = $request->name;
        $store->email = $request->email;
        $store->password = Hash::make($request->password);
        $store->save();

        return redirect()->route('admin_user_show')->with('success', 'data berhasil ditambahkan');

    }

    public function edit($id)
    {
        $edit = User::where('id', $id)->first();
        return view('admin.user.edit', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $update = User::where('id', $id)->first();
        $update->name = $request->name;
        $update->email = $request->email;

        if ($request->password != '') {
            $request->validate([
                'password' => 'required|confirmed',
            ]);
            $update->password = Hash::make($request->password);
        }

        $update->update();

        return redirect()->route('admin_user_show')->with('success', 'data berhasil diedit');
    }

    public function delete($id)
    {
        User::where('id', $id)->delete();
        return redirect()->route('admin_user_show')->with('success', 'data berhasil dihapus');
    }

}
