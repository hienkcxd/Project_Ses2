<?php

    use App\Http\Controllers\admin\EmployeeController;
    use App\Http\Controllers\admin\loginController;
    use App\Http\Controllers\admin\owensController;
    use App\Http\Controllers\user\about\AboutController;
    use App\Http\Controllers\user\homepage\homepageController;
    use App\Http\Controllers\user\news\NewsController;
    use App\Http\Controllers\user\project\ProjectsController;
    use App\Http\Controllers\user\service\ServiceController;
    use App\Models\Market\DistrictList;
    use Illuminate\Support\Facades\DB;
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
//    Route::get('/', function (){
//       $gallery = DB::table('project_lists')->get();
//       return view('Layout.main')->with(compact($gallery));
//    });
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

    //Route for market compare
    Route::prefix('Market')->group(function () {
    //Route for compare market page
        Route::get('/Compare', function (){
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

    //Route for employee
    Route::get('/employee', [EmployeeController::class, 'index']);

    //Route for admin
    Route::prefix('Admin')->group(function () {
        Route::get('/', [loginController::class, 'index'])->name('login');

        //Route for owens
        Route::get('/owens', [owensController::class, 'index']);
        Route::get('/owens/market', [owensController::class, 'market'])->name('admin_market');
        Route::get('/owens/market/getMarket', [owensController::class, 'getMarket'])->name('admin_market.getMarket');

        //Route insert:
        Route::get('/owens/market/insert', [owensController::class, 'create'])->name('admin_market.create');

        //Route edit:
        Route::prefix('/owens/market/edit')->group(function () {
            Route::get('/MarketID_{MarketID}', [owensController::class, 'edit'])->name('admin_market.detail_Market');
            Route::get('/WardID_{WardID}', [owensController::class, 'edit'])->name('admin_market.detail_Ward');
            Route::get('/DistrictID_{DistrictID}', [owensController::class, 'edit'])->name('admin_market.detail_District');
        });

        //Route delete:
        Route::prefix('/owens/market/delete')->group(function () {
            Route::get('/MarketID_{MarketID}', [owensController::class, 'delete'])->name('admin_market.delete_Market');
            Route::get('/WardID_{WardID}', [owensController::class, 'delete'])->name('admin_market.delete_Ward');
            Route::get('/DistrictID_{DistrictID}', [owensController::class, 'delete'])->name('admin_market.delete_District');
        });


    });


