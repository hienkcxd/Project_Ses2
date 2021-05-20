<?php

    use App\Http\Controllers\admin\adminEmployeeController;
    use App\Http\Controllers\admin\adminNewsController;
    use App\Http\Controllers\admin\EmployeeController;
    use App\Http\Controllers\admin\loginController;
    use App\Http\Controllers\admin\owensController;
    use App\Http\Controllers\admin\projectController;
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



    //---------------Route for admin-------------------
    //--------------------------------------------------
    Route::prefix('Admin')->group(function () {
        Route::get('/', [loginController::class, 'index'])->name('login');
        //Route index admin.
        Route::get('/owens', [owensController::class, 'index'])->name('index.admin_owens');
        Route::get('/employee', [EmployeeController::class, 'index'])->name('index.admin_employee');

        //Route for ------------------admin project:
        Route::get('/owens/project', [projectController::class, 'index'])->name('owens_project');
        Route::get('/owens/project/getProject', [projectController::class, 'getProject'])->name('admin.allProject');
        Route::get('/employee/project', function (){
            return view('dashboard_Employee.project.index_View');
        })->name('emp.project');
        //end Route for **********************admin project:

        //Route for -------------------admin news:
        Route::get('/owens/news', [adminNewsController::class, 'index'])->name('owens.news');
        Route::get('/owens/news/getNews', [adminNewsController::class, 'getNews'])->name('admin.allNews');
        Route::get('/employee/news', function (){
            return view('dashboard_Employee.news.index_View');
        })->name('emp.news');
        //end Route for ***********************admin news:

        //Route for ------------------admin employee: only for owens:
        Route::get('/owens/Employee', [adminEmployeeController::class, 'index'])->name('owens_Emp');
        Route::get('/owens/project/getProject', [projectController::class, 'getProject'])->name('admin.allProject');
        Route::get('/employee/project', function (){
            return view('dashboard_Employee.project.index_View');
        })->name('emp.project');
        //end Route for **********************admin employee:

        //Route for -------------------admin market: only for owens:
        Route::get('/owens/market', [owensController::class, 'market'])->name('admin_market');
        Route::get('/owens/market/getMarket', [owensController::class, 'getMarket'])->name('admin_market.getMarket');
        //end Route for ******************admin market: only for owens:


        //---------------------Route for CRUD Admin---------------------
        //Route -------------insert:
        Route::get('/owens/market/insert', [owensController::class, 'create'])->name('admin_market.create');
        //end ********************Route insert:

        //Route ----------------edit:
        Route::prefix('/owens/market/edit')->group(function () {
            Route::get('/MarketID_{MarketID}', [owensController::class, 'viewDetail'])->name('admin_market.detail_Market');
            Route::post('/MarketID_{MarketID}', [owensController::class, 'update'])->name('admin_market.update_market');
            Route::get('/MarketDetail/{DistrictName}',[owensController::class, 'getWard'])->name('admin_getWard');

            Route::get('/WardID_{WardID}', [owensController::class, 'viewDetail'])->name('admin_market.detail_Ward');
            Route::get('/DistrictID_{DistrictID}', [owensController::class, 'viewDetail'])->name('admin_market.detail_District');
        });

        Route::get('/owens/news/edit/NewsID_{NewsID}', [adminNewsController::class, 'edit']);
        Route::get('/employee/news/edit/NewsID_{NewsID}', function ($NewsID){
            return view('dashboard_Employee.news.form_View')->with(compact('NewsID'));
        });

        Route::get('/owens/project/edit/ProjectID_{ProjectID}', [projectController::class, 'edit']);
        Route::get('/employee/project/edit/ProjectID_{ProjectID}', function ($ProjectID){
            return view('dashboard_Employee.project.form_View')->with(compact('ProjectID'));
        });
        //end ***********************Route edit:

        //Route ---------------------------delete:
        Route::prefix('/owens/market/delete')->group(function () {
            Route::get('/MarketID_{MarketID}', [owensController::class, 'delete'])->name('admin_market.delete_Market');
            Route::get('/WardID_{WardID}', [owensController::class, 'delete'])->name('admin_market.delete_Ward');
            Route::get('/DistrictID_{DistrictID}', [owensController::class, 'delete'])->name('admin_market.delete_District');
        });
        //end ******************Route delete:


    });


