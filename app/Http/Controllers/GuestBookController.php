<?php

namespace App\Http\Controllers;

use App\Models\GuestMessage;
use Illuminate\Http\Request;

class GuestBookController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|max:55',
            'email' => 'required|email|max:32',
            'pesan' => 'required',
        ]);

        GuestMessage::create($validatedData);

        return redirect('/')->with('success', 'Terima kasih! Komentar Anda berhasil dikirim.');
    }

    public function adminIndex()
    {
        $guestMessages = GuestMessage::latest()->get();
        return view('admin.guestbook.index', compact('guestMessages'));
    }

    public function edit(GuestMessage $guestMessage)
    {
        return view('admin.guestbook.edit', compact('guestMessage'));
    }

    public function update(Request $request, GuestMessage $guestMessage)
    {
        $validatedData = $request->validate([
            'username' => 'required|max:55',
            'email' => 'required|email|max:32',
            'pesan' => 'required',
        ]);

        $guestMessage->update($validatedData);

        return redirect()->route('admin.guestMessage.index')->with('success', 'Komentar berhasil diperbarui.');
    }

    public function destroy(GuestMessage $guestMessage)
    {
        $guestMessage->delete();

        return redirect()->route('admin.guestMessage.index')->with('success', 'Komentar berhasil dihapus.');
    }
}