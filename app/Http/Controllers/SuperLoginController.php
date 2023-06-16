<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\SuperAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SuperLoginController extends Controller
{
    public function index2()
    {
        $existingSuperadminIds = User::pluck('superadmin_id')->toArray(); // Mengambil semua superadmin_id yang sudah ada di tabel User

        $superadminIds = DB::table('super_admins')
            ->whereNotIn('id', $existingSuperadminIds)
            ->pluck('id'); // Mengambil semua ID superadmin yang belum ada di tabel User
        // Lanjutkan dengan langkah-langkah berikutnya untuk menarik data superadmin ke user
        foreach ($superadminIds as $superadminId) {
            $superadmin = SuperAdmin::findOrFail($superadminId);

            $user = new User;
            $user->superadmin_id = $superadmin->id;
            $user->nip = $superadmin->nip;
            $user->password = $superadmin->password;
            $user->role_id = 1;
            $user->save();
        }
        return view('superadmin.login');
    }

    public function authenticate2(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt(['nip' => $request->nip, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'password' => 'Wrong nip or password',
        ]);
    }

    public function logout2()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/superLogin');
    }
}
