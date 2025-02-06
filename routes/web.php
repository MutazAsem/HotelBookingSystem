<?php

use App\Livewire\BookingPage;
use App\Livewire\HomePage;
use App\Livewire\HotelsPage;
use App\Livewire\ReportPage;
use App\Livewire\RoomsPage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class)->name('home');
Route::get('/hotels', HotelsPage::class)->name('hotels');
Route::get('/rooms', RoomsPage::class)->name('rooms');
Route::get('/report/{id}', ReportPage::class)->name('report');
Route::get('/booking/{id}', BookingPage::class)->name('booking');
