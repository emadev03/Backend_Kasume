<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $title = 'Add New Admin';
        return view('superadmin.addAdmin', compact('title'));
    }

    public function store(Request $request)
    {
        $title = 'Add New Admin';
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email:dns',
            'nip' => 'required|min:8|max:8|unique:admins',
            'ward_of_origin' => 'required',
            'password' => 'required|min:8|max:100|confirmed',
            'password_confirmation' => 'required',
        ]);

        $admin = new Admin($validatedData);
        $admin->password = Hash::make($admin->password);
        $admin->password_confirmation = Hash::make($admin->password_confirmation);
        $admin->save();

        $user = new User;
        $user->admin_id = $admin->id;
        $user->nip = $admin->nip;
        $user->password = $admin->password;
        $user->role_id = 2;
        $user->save();

        return redirect('/addAdmin', compact('title'))->with('success', 'Registration successfull!');
    }

    public function list()
    {
        $title = 'List Admin';
        $admin = Admin::all();
        return view('superadmin.adminList', compact('title'))->with('admin', $admin);
    }

    public function destroy($id)
    {
        $title = 'Admin';
        $admin = Admin::find($id);
        $admin->delete();
        return redirect('/adminList');
    }
    public function edit($id)
    {
        $admin = Admin::whereId($id)->first();
        return view('superadmin.editAdmin', compact('title'))->with('admin', $admin);
    }
    public function update(Request $request, $id)
    {
        $title = 'Admin';
        $admin = Admin::find($id);

        $admin->first_name = $request->first_name;
        $admin->last_name = $request->last_name;
        $admin->email = $request->email;
        $admin->nip = $request->nip;
        $admin->ward_of_origin = $request->ward_of_origin;
        $admin->password = $request->password;
        $admin->password_confirmation = $request->password_confirmation;

        $admin['password'] = Hash::make($admin['password']);
        $admin['password_confirmation'] = Hash::make($admin['password_confirmation']);
        $admin::find($id)->update(['password' => Hash::make($request->password)]);
        $admin::find($id)->update(['password_confirmation' => Hash::make($request->password_confirmation)]);
        $admin->save();

        return redirect('/adminList', compact('title'));
    }
}
