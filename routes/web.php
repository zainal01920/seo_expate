<?php

use App\Http\Livewire\IndexComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', IndexComponent::class)->name('home');
Route::get('/dashboard', IndexComponent::class)->middleware(['auth','verified'])->name('dashboard');

require __DIR__.'/auth.php';
