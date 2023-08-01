<?php

use App\Http\Livewire\TeamMember\Create;
use App\Http\Livewire\TeamMember\Index;
use App\Http\Livewire\TeamMember\Update;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Index::class)->name('index');
Route::get('/team-members/create', Create::class)->name('create');
Route::get('/team-members/{teamMember}/edit', Update::class)->name('edit');
