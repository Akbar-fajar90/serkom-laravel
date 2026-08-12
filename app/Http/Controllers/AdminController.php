<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|max:55',
            'email' => 'required|email|max:32',
            'password' => 'required|confirmed|min:8|Hash:password',
        ]);

        User::create($validatedData);

        return redirect('/')->with('success', 'User telah ditambahkan');
    }

    public function adminIndex()
    {
        $guestMessages = User::latest()->paginate(10);
        return view('admin.user.index', compact('user'));
    }

    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'username' => 'required|max:55',
            'email' => 'required|email|max:32',
            'password' => 'required|confirmed|min:8|Hash:password',
        ]);

        $user->update($validatedData);

        return redirect()->route('admin.user.index')->with('success', 'User berhasil diperbarui.');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.user.index')->with('success', 'User berhasil dihapus.');
    }
    
}