<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestBookController;
use App\Models\GuestMessage;

Route::get('/', function () {
    $guestMessages = GuestMessage::latest()->get();
    return view('index', compact('guestMessages'));
});

Route::post('/komentar', [GuestBookController::class, 'store'])->name('guestMessage.store');

// Admin routes akan ditambahkan nanti
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/guestbook', [GuestBookController::class, 'adminIndex'])->name('guestMessage.index');
    Route::get('/guestbook/{guestMessage}/edit', [GuestBookController::class, 'edit'])->name('guestMessage.edit');
    Route::put('/guestbook/{guestMessage}', [GuestBookController::class, 'update'])->name('guestMessage.update');
    Route::delete('/guestbook/{guestMessage}', [GuestBookController::class, 'destroy'])->name('guestMessage.destroy');
});