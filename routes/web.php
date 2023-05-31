<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequestsController;
use App\Http\Controllers\PetsController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\HomeController;

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

if (App::environment('production')) {
    URL::forceScheme('https');
}

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',[HomeController::class, 'welcome'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/pre-register', [HomeController::class, 'preRegister'])->name('pre-register');
Route::post('/pre-register', [HomeController::class, 'registerStore'])->name('preregister.store');


Route::middleware('auth')->group(function () {
    Route::resource('requests', RequestsController::class);

    Route::get('/email', [HomeController::class, 'email']);

    Route::get('requests/{id}/sign', [RequestsController::class, 'sign']);
    Route::post('requests/sign', [RequestsController::class, 'storeSign'])->name('requests.storeSign');

    Route::get('profile/sign', [ProfileController::class, 'sign'])->name('profile.sign');
    Route::post('profile/sign', [ProfileController::class, 'storeSign'])->name('profile.storeSign');


    Route::resource('pets', PetsController::class);
    Route::get('pets-org', [RequestsController::class, 'pets']);
    Route::get('users-org/{id}', [RequestsController::class, 'users']);

    Route::get('chikavi/create', [HomeController::class, 'create']);
    Route::post('home/store', [HomeController::class, 'store'])->name('home.store');


    Route::get('/contract/{id}', [RequestsController::class, 'generatePDF']);
    Route::post('/request/delivered/{id}', [RequestsController::class, 'delivered_pet'])->name('request.delivered_pet');
    Route::post('/request/cancel/{id}', [RequestsController::class, 'cancel'])->name('request.cancel');
    Route::post('/request/success/{id}', [RequestsController::class, 'success'])->name('request.success');

    Route::get('/people/create', [PeopleController::class, 'create']);
    Route::post('/people/store', [PeopleController::class, 'store'])->name('people.store');

    Route::get('/profile/edit', [ProfileController::class, 'editar'])->name('profile.editar');
    Route::put('/profile/actualizar', [ProfileController::class, 'actualizar'])->name('profile.actualizar');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
