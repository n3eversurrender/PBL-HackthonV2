<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class DataAdminController extends Controller
{
    public function dataAdmin()
    {
        // Ambil semua data dari tabel admin
        $admins = Admin::paginate(10);

        // Kirim data ke view
        return view('Admin/DataAdmin', [
            'admins' => $admins,
        ]);
    }

    public function tambahAdmin()
    {
        return view('admin/TambahAdmin', []);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|unique:admin,username|max:255',
            'password' => 'required|string|min:6',
            'role' => 'required|in:admin,superadmin',
        ]);

        Admin::create([
            'username' => $validated['username'],
            'kata_sandi' => Hash::make($validated['password']),
            'role' => $validated['role'],
        ]);

        return redirect()->route('admin.index')->with('success', 'Admin berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $admin = Admin::findOrFail($id);

        // Validasi input
        $validated = $request->validate([
            'username' => 'required|string|unique:admin,username,' . $admin->admin_id . ',admin_id|max:255',
            'password' => 'nullable|string|min:6',
            'role' => 'required|in:admin,superadmin',
        ]);

        // Update data
        $admin->username = $validated['username'];
        if (!empty($validated['password'])) {
            $admin->kata_sandi = Hash::make($validated['password']);
        }
        $admin->role = $validated['role'];
        $admin->save();

        // Redirect kembali ke halaman admin dengan pesan sukses
        return redirect()->route('admin.index')->with('success', 'Informasi admin berhasil diperbarui!');
    }


    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);

        $admin->delete();

        return redirect()->route('admin.index')->with('success', 'Admin berhasil dihapus!');
    }
}
