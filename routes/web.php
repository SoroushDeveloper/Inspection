<?php

use App\Http\Middleware\Admin;
use App\Http\Middleware\Auth;
use App\Http\Middleware\Guest;
use App\Http\Middleware\Inspector;
use App\Livewire\Commons;
use App\Livewire\Consistencies;
use App\Livewire\CreateInspection;
use App\Livewire\CreateInstitution;
use App\Livewire\EditInspection;
use App\Livewire\EditInstitution;
use App\Livewire\Genres;
use App\Livewire\Grades;
use App\Livewire\Home;
use App\Livewire\Inspections;
use App\Livewire\Institutions;
use App\Livewire\Majors;
use App\Livewire\Properties;
use App\Livewire\ShowInspection;
use App\Livewire\ShowInstitution;
use App\Livewire\SignIn;
use App\Livewire\States;
use App\Livewire\Subjects;
use App\Livewire\Types;
use App\Livewire\Users;
use Illuminate\Support\Facades\Route;

Route::get('/SignIn', SignIn::class)->name('SignIn')->middleware(Guest::class);

Route::middleware(Auth::class)->group(function () {
    Route::get('/Logout', function () {
        auth()->logout();
        return redirect()->route('SignIn');
    })->name('Logout');
    Route::get('/', Home::class)->name('Home');

    Route::get('/Commons', Commons::class)->name('Commons');
    Route::get('/Consistencies', Consistencies::class)->name('Consistencies');
    Route::get('/Genres', Genres::class);
    Route::get('/Grades', Grades::class);
    Route::get('/Inspections', Inspections::class)->name('Inspections');
    Route::get('/Institutions', Institutions::class)->name('Institutions');
    Route::get('/Majors', Majors::class)->name('Majors');
    Route::get('/Properties', Properties::class)->name('Properties');
    Route::get('/States', States::class)->name('States');
    Route::get('/Subjects', Subjects::class)->name('Subjects');
    Route::get('/Types', Types::class)->name('Types');

    Route::middleware(Admin::class)->group(function () {
        Route::get('/Users', Users::class)->name('Users');
        Route::get('/CreateInstitution', CreateInstitution::class)->name('CreateInstitution');
        Route::get('/EditInstitution/{id}', EditInstitution::class)->name('EditInstitution');
    });
    Route::middleware(Inspector::class)->group(function () {
        Route::get('/CreateInspection', CreateInspection::class)->name('CreateInspection');
        Route::get('/EditInspection/{id}', EditInspection::class)->name('EditInspection');
    });

    Route::get('/ShowInstitution/{id}', ShowInstitution::class)->name('ShowInstitution');
    Route::get('/ShowInspection/{id}', ShowInspection::class)->name('ShowInspection');
});
