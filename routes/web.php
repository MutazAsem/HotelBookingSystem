<?php

use App\Http\Controllers\AuthController;
use App\Livewire\BookingHistoryPage;
use App\Livewire\BookingPage;
use App\Livewire\HomePage;
use App\Livewire\HotelsPage;
use App\Livewire\LoginPage;
use App\Livewire\ProfilePage;
use App\Livewire\ReportPage;
use App\Livewire\RoomsPage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class)->name('home');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/check_user',[AuthController::class,'check_user'])->name('check_user');
Route::get('/hotels', HotelsPage::class)->name('hotels');
Route::get('/rooms', RoomsPage::class)->name('rooms');
Route::group(['middleware'=> 'auth'] ,function() {
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
    Route::get('/profile', ProfilePage::class)->name('profile');
    Route::get('/booking-history', BookingHistoryPage::class)->name('bookingHistory');
    Route::get('/report/{id}', ReportPage::class)->name('report');
    Route::get('/booking/{id}', BookingPage::class)->name('booking');
});