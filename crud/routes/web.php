<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/* Route::get('/note', [NoteController::class, 'index'])->name('note.index');
Route::get('/note/create', [NoteController::class, 'create'])->name('note.create');
Route::post('/note', [NoteController::class, 'store'])->name('note.store');
Route::get('/note/{note}/edit', [NoteController::class, 'edit'])->name('note.edit');
Route::put('/note/{note}', [NoteController::class, 'update'])->name('note.update');
Route::get('/note/{note}', [NoteController::class, 'show'])->name('note.show');
Route::delete('/note/{note}', [NoteController::class, 'destroy'])->name('note.destroy'); */

Route::resource('note', NoteController::class);

Route::resource('post', PostController::class);

// Compare this snippet from crud/resources/views/note/index.blade.php:
// <!DOCTYPE html>