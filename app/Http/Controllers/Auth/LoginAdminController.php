<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin; // Tambahkan model Admin
use Illuminate\Support\Facades\Hash;

class LoginAdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.loginadmin');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cek apakah email ada di tabel admins
        $admin = Admin::where('email', $credentials['email'])->first();

        // Jika admin ditemukan dan password sesuai
        if ($admin && Hash::check($credentials['password'], $admin->password)) {
            session(['admin_id' => $admin->id, 'admin_name' => $admin->name]); // Simpan sesi admin
            return redirect()->route('admin.dashboard')->with('success', 'Login Berhasil');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    public function logout(Request $request)
    {
        session()->forget(['admin_id', 'admin_name']); // Hapus sesi
        return redirect()->route('admin.login');
    }
}

