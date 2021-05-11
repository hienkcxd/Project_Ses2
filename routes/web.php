<?php

    use App\Http\Controllers\admin\login\LoginController;
    use App\Http\Controllers\user\about\AboutController;
    use App\Http\Controllers\user\homepage\homepageController;
    use App\Http\Controllers\user\news\NewsController;
    use App\Http\Controllers\user\project\ProjectsController;
    use App\Http\Controllers\user\service\ServiceController;
    use App\Models\City;
    use App\Models\Market\DistrictList;
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

    //Route for user
//    Route::get('/', function () {
//        return view('homepage.homepage');
//    });

    Route::get('/', [homepageController::class, 'index'])->name('homepage');
    Route::get('/test', function () {
        return view('test');
    });

    Route::prefix('AboutUs')->group(function () {
        Route::get('/', [AboutController::class, 'index'])->name('aboutus');
    });

    Route::prefix('News')->group(function () {
        Route::get('/', [NewsController::class, 'index'])->name('news');
        Route::get('/fetch_data', [NewsController::class, 'fetch_data']);
        Route::get('/{NewsDetailID}', [NewsController::class, 'newsDetail'])->name('news_detail');
    });

    Route::prefix('Service')->group(function () {
        Route::get('/', [ServiceController::class, 'index'])->name('Service');
        Route::get('/detail', [ServiceController::class, 'detail'])->name('Service_detail');
    });

    Route::prefix('Project')->group(function () {
        Route::get('/', [ProjectsController::class, 'index'])->name('pro');
        Route::get('/{ProDetailID}', [ProjectsController::class, 'projectDetail'])->name('project_detail');
    });

    //Route for market
    Route::prefix('Market')->group(function () {
    //Route for compare market page
        Route::get('/Compare', function () {
            $disList = DistrictList::all();
            return view('Market.compare')->with(compact('disList'));
        })->name('compare');
        Route::get('/Compare/{name}', function ($name) {
            $wards = DistrictList::find($name)->wards;
            return json_encode($wards);
        });
        //Route for index market page
        Route::get('/', function () {
            $disList = DistrictList::all();
            return view('Market.index')->with(compact('disList'));
        })->name('market');
        Route::get('/{name}', function ($name) {
            $wards = DistrictList::find($name)->wards;
            return json_encode($wards);
        });


    });

    //Route for admin
    Route::prefix('Login')->group(function () {
        Route::get('/', [LoginController::class, 'index'])->name('login');
    });


