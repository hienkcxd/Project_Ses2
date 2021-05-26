<?php

    use App\Http\Controllers\admin\adminCustomerController;
    use App\Http\Controllers\admin\adminEmployeeController;
    use App\Http\Controllers\admin\adminNewsController;
    use App\Http\Controllers\admin\adminWorkController;
    use App\Http\Controllers\admin\loginController;
    use App\Http\Controllers\admin\owensController;
    use App\Http\Controllers\admin\projectController;
    use App\Http\Controllers\AuthenticationController;
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

//        Route index admin
    Route::prefix('Admin')->group(function () {
        Route::post('/auth/save', [AuthenticationController::class, 'save'])->name('auth.save');
        Route::post('/auth/check', [AuthenticationController::class, 'check'])->name('auth.check');
        Route::get('/auth/logout', [AuthenticationController::class, 'logout'])->name('auth.logout');

        Route::group(['middleware'=>['AuthCheck']], function(){
            Route::get('/', [loginController::class, 'index'])->name('login');
            Route::get('/owens/Employee/Register', [AuthenticationController::class, 'register'])->name('owens_register');

            Route::get('/employee', [AuthenticationController::class, 'dashboard_Emp'])->name('index.admin_employee');
            Route::get('/owens', [AuthenticationController::class, 'dashboard_Owens'])->name('index.admin_owens');

            //  End Route index admin
            // +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            //  Begin Route Employee: only owens
            Route::get('/owens/Employee/getEmployee', [adminEmployeeController::class, 'getEmployee'])->name('admin.allEmployee');
            Route::get('/owens/Employee/Account_Lists', [AuthenticationController::class, 'accLists'])->name('accLists');

            Route::get('/owens/Employee', [adminEmployeeController::class, 'index'])->name('owens_Emp');
            Route::get('/{any?}/Employee', function ($any = null) {
                return redirect(route('owens_Emp'))->with('fail', 'Trang yêu cầu không tồn tại!!!');;
            })->where('any', '.*');;

            Route::get('/owens/Employee/edit/Employee_{EmployeeID}', [adminEmployeeController::class, 'edit'])->name('emp_edit');
            Route::get('/{any?}/Employee/edit/Employee_{EmployeeID}', function ($any = null) {
                return back()->with('fail', 'Trang yêu cầu không tồn tại!!!');;;
            })->where('any', '.*');;

            Route::post('/Employee_{EmployeeID}', [adminEmployeeController::class, 'update'])->name('owens.update_emp');

            //  End Route Employee
            // +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            //  Begin Route market
            Route::get('/owens/market', [owensController::class, 'market'])->name('admin_market');
            Route::get('/{any?}/market/', function ($any = null) {
                return redirect(route('admin_market'))->with('fail', 'Trang yêu cầu không tồn tại!!!');
            })->where('any', '.*');;

            Route::get('/owens/market/getMarket', [owensController::class, 'getMarket'])->name('admin_market.getMarket');
            Route::get('/owens/market/insert', [owensController::class, 'create'])->name('admin_market.create');

            Route::prefix('/owens/market/edit')->group(function () {
                Route::get('/MarketID_{MarketID}', [owensController::class, 'viewDetail'])->name('admin_market.detail_Market');
                Route::post('/MarketID_{MarketID}', [owensController::class, 'update'])->name('admin_market.update_market');
                Route::get('/MarketDetail/{DistrictName}',[owensController::class, 'getWard'])->name('admin_getWard');
                Route::get('/WardID_{WardID}', [owensController::class, 'viewDetail'])->name('admin_market.detail_Ward');
                Route::get('/DistrictID_{DistrictID}', [owensController::class, 'viewDetail'])->name('admin_market.detail_District');
            });
            Route::get('/{any?}/market/edit/{any2}', function ($any = null) {
                return redirect(route('admin_market'))->with('fail', 'Trang yêu cầu không tồn tại!!!');;
            })->where(['any', '.*'],['any2', '.*'] );


            Route::prefix('/owens/market/delete')->group(function () {
                Route::get('/MarketID_{MarketID}', [owensController::class, 'delete'])->name('admin_market.delete_Market');
                Route::get('/WardID_{WardID}', [owensController::class, 'delete'])->name('admin_market.delete_Ward');
                Route::get('/DistrictID_{DistrictID}', [owensController::class, 'delete'])->name('admin_market.delete_District');
            });

            //  end Route market
            // +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            //  Begin Route Customer

            Route::get('/owens/customer', [adminCustomerController::class, 'index_owens'])->name('owens.customer');
            Route::get('/employee/customer', [adminCustomerController::class, 'index_Emp'])->name('emp.customer');
            Route::get('/owens/black_list', [adminCustomerController::class, 'bList_owens'])->name('owens.black_lists');
            Route::get('/employee/black_list', [adminCustomerController::class, 'bList_emp'])->name('emp.black_lists');

            Route::get('/owens/customer/edit/customerID_{customerID}', [adminCustomerController::class, 'editCus_owens'])->name('owens.customer_edit');
            Route::get('/employee/customer/edit/customerID_{customerID}', [adminCustomerController::class, 'editCus_emp'])->name('emp.customer_edit');
            Route::get('/owens/black_list/edit/BlackCusID_{BlackCusID}', [adminCustomerController::class, 'editBCust_owens'])->name('owens.blackList_edit');
            Route::get('/employee/black_list/edit/BlackCusID_{BlackCusID}', [adminCustomerController::class, 'editBCust_emp'])->name('emp.blackList_edit');

            Route::get('/owens/customer/create', [adminCustomerController::class, 'create_owens'])->name('owens.customer_create');
            Route::get('/{any?}/customer/create', function ($any = null) {
                return redirect(route('owens.customer_create'))->with('fail', 'Trang yêu cầu không tồn tại!!!');;
            })->where('any', '.*');

            Route::get('/owens/black_list/create', [adminCustomerController::class, 'createBcust_owens'])->name('owens.blackCust_create');
            Route::get('/{any?}/black_list/create', function ($any = null) {
                return redirect(route('owens.blackCust_create'))->with('fail', 'Trang yêu cầu không tồn tại!!!');;
            })->where('any', '.*');

            Route::post('/customerID_{customerID}', [adminCustomerController::class, 'update'])->name('customer_update');
            Route::post('/BlackCustID_{BlackCustID}', [adminCustomerController::class, 'upd_BlackCust'])->name('BlackCust_update');
            Route::get('/delete/customerID_{customerID}', [adminCustomerController::class, ''])->name('owens.customer_delete');


            Route::post('/createCustomer', [adminCustomerController::class, 'createCust'])->name('create.customer');
            Route::post('/createBlackCust', [adminCustomerController::class, 'createBlackCust'])->name('create.BlackCust');
            //  End Route Customer
            // +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            //  Begin Route work

            Route::get('/owens/work_list', [adminWorkController::class, 'index_owens'])->name('owens.work');
            Route::get('/employee/work_list', [adminWorkController::class, 'index_Emp'])->name('emp.work');

            Route::get('/owens/work_progress', [adminWorkController::class, 'progress_owens'])->name('owens.work_progress');
            Route::get('/employee/work_progress', [adminWorkController::class, 'progress_emp'])->name('emp.work_progress');

            Route::get('/owens/work_list/create', [adminWorkController::class, 'create_owens'])->name('owens.create_work');
            Route::get('/{any?}/work_list/create', function ($any = null) {
                return redirect(route('owens.create_work'))->with('fail', 'Trang yêu cầu không tồn tại!!!');;
            })->where('any', '.*');

            Route::get('/owens/work_list/edit/WorkID_{WorkID}', [adminWorkController::class, 'edit_owens'])->name('owens.work_detail');
            Route::get('/employee/work_list/edit/WorkID_{WorkID}', [adminWorkController::class, 'edit_emp'])->name('emp.work_detail');
            Route::post('/WorkID_{WorkID}', [adminWorkController::class, 'update'])->name('admin.update_work');
            Route::post('/createWork', [adminWorkController::class, 'create'])->name('createWork');
            //  End Route work
            // +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            //  Begin Route Project

            Route::get('/owens/project', [projectController::class, 'index_owens'])->name('owens_project');
            Route::get('/employee/project', [projectController::class, 'index_Emp'])->name('emp.project');
            Route::get('/owens/project/getProject', [projectController::class, 'getProject'])->name('admin.allProject');//Datatable serverside


            Route::get('/owens/project/edit/ProjectID_{ProjectID}', [projectController::class, 'edit_owens'])->name('editProject_owens');
            Route::get('/employee/project/edit/ProjectID_{ProjectID}', [projectController::class, 'edit_emp'])->name('editProject_emp');

            Route::get('/owens/project/create', [projectController::class, 'create_owens'])->name('createProject_owens');
            Route::get('/employee/project/create', [projectController::class, 'create_emp'])->name('createProject_emp');

            Route::post('/ProjectID_{ProjectID}', [projectController::class, 'update'])->name('admin.update_Project');
            Route::post('/CreateProject', [projectController::class, 'create_project'])->name('create_Project');

            //  End Route Project
            // +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            //  Begin Route News

            Route::get('/owens/news', [adminNewsController::class, 'index_owens'])->name('owens.news');
            Route::get('/employee/news', [adminNewsController::class, 'index_Emp'])->name('emp.news');
            Route::get('/owens/news/getNews', [adminNewsController::class, 'getNews'])->name('admin.allNews');//Datatable serverside


            Route::get('/owens/news/edit/NewsID_{NewsID}', [adminNewsController::class, 'edit_owens'])->name('owens.editNews');
            Route::get('/employee/news/edit/NewsID_{NewsID}', [adminNewsController::class, 'edit_emp'])->name('emp.editNews');
            Route::get('/owens/news/create', [adminNewsController::class, 'create_owens'])->name('owens.createNews');
            Route::get('/employee/news/create', [adminNewsController::class, 'create_Emp'])->name('emp.createNews');

            Route::post('/NewsID_{NewsID}', [adminNewsController::class, 'update'])->name('admin.update_News');
            Route::post('/Create', [adminNewsController::class, 'create_news'])->name('create_News');
            //        End Route Project

        });

});


