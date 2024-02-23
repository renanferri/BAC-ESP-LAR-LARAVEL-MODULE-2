<?php

use App\Enums\SignatureStatus;
use App\Http\Controllers\EmployerAddressController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SignatureController;
use App\Http\Middleware\TrustProxies;
use App\Models\Plan;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/teste3', [SignatureController::class, 'index']);



Route::get('/teste2', function() {
    return view('test-slot', ['user' => Auth::user()->name]);
});

Route::get('/teste', function() {

    // $plan = Plan::create([
    //     'name' => 'Plan 1',
    //     'short_description' => 'Basic',
    //     'price' => 100
    // ]);

    // $client = Auth::user()->client()->create([
    //     'document' => '12345678',
    //     'birthdate' => '1992-07-20'        
    // ]);

    // $client->signatures()->create([
    //     'plan_id' => $plan->id,
    //     'status' => SignatureStatus::SUSPENDED
    // ]);

    //return 'Test Route';    

    return view('test', ['user' => Auth::user()->name]);
    
});

Route::match(['GET', 'POST'], '/routes', fn() => 'learning routes');

Route::any('/routes2', fn() => 'learning routes');

// Route::resource('employer', EmployerController::class);

// Route::resource('employer.address', EmployerAddressController::class);

Route::get('userland', fn() => 'access granted')
    ->middleware('checkToken:simple-token');

Route::resource('empregador', EmployerController::class)
    ->parameters([
       'empregador' => 'employer'
    ])->except([
        'destroy'
    ]);


Route::resource('empregador.endereco', EmployerAddressController::class)
    ->parameters([
        'empregador' => 'employer',
        'endereco' => 'address'
    ])->only([
        'index',
        'destroy'
    ]);


Route::resource('plano', PlanController::class)
    ->withoutMiddleware([
        TrustProxies::class,
        VerifyCsrfToken::class
    ])
    ->parameters([
        'plano' => 'plan:cod'      
    ]);
    // ->missing(fn() => redirect()->route('plano.index'));


Route::fallback(fn() => 'fallback');

require __DIR__.'/auth.php';
