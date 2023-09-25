<?php

use App\Http\Controllers\Admin\AnnouncementsController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\ConnectionsController;
use App\Http\Controllers\Admin\DirectorsController;
use App\Http\Controllers\Admin\FaqsController;
use App\Http\Controllers\Admin\GalleriesController;
use App\Http\Controllers\Admin\LessonsController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\OneShiftsController;
use App\Http\Controllers\Admin\RequisitesController;
use App\Http\Controllers\Admin\ResourcesController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\Admin\SportsController;
use App\Http\Controllers\Admin\TasksController;
use App\Http\Controllers\Admin\TeachersController;
use App\Http\Controllers\Admin\TwoshiftsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
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
// Jasco 111
Route::get('/lang/{lang}', function($lang){
   session(['lang' => $lang]);
   return back();
});

//sdsadadagdsf

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/connections', [MainController::class, 'connections'])->name('connections');
Route::get('/educations', [MainController::class, 'educations'])->name('educations');
Route::get('/educationDetails/{id}', [MainController::class, 'educationDetails'])->name('educationDetails');
Route::get('/educationDetails2/{id}', [MainController::class, 'educationDetails2'])->name('educationDetails2');
Route::get('/faqs', [MainController::class, 'faqs'])->name('faqs');
Route::get('/gallery', [MainController::class, 'gallery'])->name('gallery');
Route::get('/infoGrafika', [MainController::class, 'infoGrafika'])->name('infoGrafika');
Route::get('/leaderShip', [MainController::class, 'leaderShip'])->name('leaderShip');
Route::get('/leaderShipDetail/{id}', [MainController::class, 'leaderShipDetail'])->name('leaderShipDetail');
Route::get('/rekvizit', [MainController::class, 'rekvizit'])->name('rekvizit');
Route::get('/schoolNews', [MainController::class, 'schoolNews'])->name('schoolNews');
Route::get('/schoolRules', [MainController::class, 'schoolRules'])->name('schoolRules');
Route::get('/schoolTasks', [MainController::class, 'schoolTasks'])->name('schoolTasks');
Route::get('/search', [MainController::class, 'search'])->name('search');
Route::get('/stateSymbols', [MainController::class, 'stateSymbols'])->name('stateSymbols');
Route::get('/teacher', [MainController::class, 'teacher'])->name('teacher');
Route::get('/teacherDetail/{id}', [MainController::class, 'teacherDetail'])->name('teacherDetail');
Route::get('/usefulResurs', [MainController::class, 'usefulResurs'])->name('usefulResurs');
Route::get('/usefulResursDetail/{id}', [MainController::class, 'usefulResursDetail'])->name('usefulResursDetail');
Route::get('/newsDetail/{id}', [MainController::class, 'newsDetail'])->name('newsDetail');
Route::get('/newsDetail2/{id}', [MainController::class, 'newsDetail2'])->name('newsDetail2');



Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::resource('news', NewsController::class);
    Route::resource('directors', DirectorsController::class);
    Route::resource('teachers', TeachersController::class);
    Route::resource('categories', CategoriesController::class);
    Route::resource('lessons', LessonsController::class);
    Route::resource('sports', SportsController::class);
    Route::resource('tasks', TasksController::class);
    Route::resource('resources', ResourcesController::class);
    Route::resource('requisites', RequisitesController::class);
    Route::resource('oneshifts', OneShiftsController::class);
    Route::resource('twoshifts', TwoshiftsController::class);
    Route::resource('announcements', AnnouncementsController::class);
    Route::resource('faqs', FaqsController::class);
    Route::resource('sliders', SliderController::class);
    Route::resource('connections', ConnectionsController::class);
    Route::resource('galleries', GalleriesController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
