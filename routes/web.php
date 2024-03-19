<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin', function(){
    $users = App\Models\User::all();
    return view('admin/index',['users' => $users]);
})->name('admin.index');

// Route::resource('/admin/users', 'App\Http\Controllers\UserController');


Route::get('/admin/users',[UserController::class, 'index'])->name('users.index');
Route::post('/admin/users',[UserController::class, 'store'])->name('users.store');
Route::delete('/admin/users/{post}',[UserController::class, 'destroy'])->name('users.destroy');