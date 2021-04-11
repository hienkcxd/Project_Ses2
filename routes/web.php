<?php

    use App\Http\Controllers\project\ProjectsController;
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

    Route::get('/', function () {
        return view('homepage.homepage');
    })->name('homepage');


    Route::prefix('project')->group(function () {
        Route::get('/', [ProjectsController::class, 'index'])->name('project');
    });
