<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', fn () => view('landing'))->name('landing');

Route::get('/privacy-policy', fn () => view('privacy-policy'))->name('privacy-policy');
Route::get('/faq', fn () => view('faq'))->name('faq');

Route::get('/contacts', fn () => view('contacts'))->name('contacts');

Route::get('/terms', fn () => view('terms'))->name('terms');

Route::middleware('guest')
    ->group(function () {
    Route::get('/account/created', fn () => view('register-success'))->name('register-success');
    });

Route::middleware('auth')
    ->group(function () {
        Route::get('/account', fn () => view('account'))->name('account');
        Route::get('/account/edit', fn () => view('account-edit'))->name('account.edit');
        Route::get('/account/tenant/search', fn () => view('search-tenant'))->name('account.tenant.search');
        Route::get('/account/tenant/add', fn () => view('enter-tenant'))->name('account.tenant.add');

        Route::post('/account/logout', function () {
            Auth::guard('web')->logout();

            session()->invalidate();
            session()->regenerateToken();

            return redirect('/?logout=true');
        })
        ->name('account.logout');

        Route::get('/account/invoice/{invoice}', function (Request $request, $invoiceId) {
            return $request->user()->downloadInvoice($invoiceId, [
                'vendor' => 'Check Before you let',
                'product' => 'Check Before you let',
            ]);
        });

        // Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
        // Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
    });

Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';
