<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Livewire\Admin\Big\Formu;
use App\Http\Livewire\Admin\Credit\About;
use App\Http\Livewire\Admin\Users\ListUsers;
use App\Http\Livewire\Admin\Widgets\ListCharts;
use App\Http\Livewire\Admin\Widgets\ListForms;
use App\Http\Livewire\Admin\Widgets\ListTables;
use App\Http\Livewire\Admin\Widgets\ListUiElement;
use App\Http\Livewire\Admin\Widgets\ListWidgets;
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

Route::get('/', function () {  return redirect()->route('admin.dashboard');});

Route::get('admin/dashboard', DashboardController::class)->name('admin.dashboard');

Route::get('admin/users', ListUsers::class)->name('admin.users');

Route::get('admin/widgets', ListWidgets::class)->name('admin.widgets');

Route::get('admin/charts', ListCharts::class)->name('admin.charts');

Route::get('admin/ielement', ListUiElement::class)->name('admin.ielement');

Route::get('admin/forms', ListForms::class)->name('admin.forms');

Route::get('admin/tables', ListTables::class)->name('admin.tables');

Route::get('admin/about', About::class)->name('admin.about');

Route::get('admin/formu', Formu::class)->name('admin.formu');
