<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlansController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\UserselectedinsuranceController;
use App\Http\Controllers\UserselectedplanController;
use App\Http\Controllers\UserdashboardController;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\Artisan;
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


// Route::get('/welcome', function () {
//     $plans=\App\Models\Plans::all();
//     $insurances=\App\Models\Insurance::all();
//     return view('welcome',compact('plans','insurances'));
// })->name('/');

Auth::routes(['verify' => true]);

Route::get('/about',function(){
    return view('user/about');
});
Route::get('/index1',function(){
    $plans=\App\Models\Plans::all();
    $insurances=\App\Models\Insurance::all();
    return view('user/index-1',compact('plans','insurances'));
});
Route::get('/index2',function(){
    return view('user/index-2');
});
Route::get('/404',function(){
    return view('user/404');
});
Route::get('/blog-detail',function(){
    return view('user/blog-detail');
});
Route::get('/blog-list',function(){
    return view('user/blog-list');
});
Route::get('/contact',function(){
    return view('user/contact');
});
Route::get('/faq',function(){
    return view('user/faq');
});
Route::get('/plans',function(){
    $plans=\App\Models\Plans::all();
    return view('user/plan',compact('plans'));
});
Route::get('/Insurance-Plans',function(){
    $insurances=\App\Models\Insurance::all();
    return view('user/insurance',compact('insurances'));
});
Route::get('/team',function(){
    return view('user/team');
});
Route::get('/token-sale',function(){
    return view('user/token-sale');
});

//                                       Admin Routes

Route::group(['middleware'=> ['auth', 'role:Admin'],'prefix' => 'Admin',  ],function(){

//    User Routes

    Route::resource('/',App\Http\Controllers\UserController::class);
    Route::get('User/index',[UserController::class,'index'])->name('userindex');
    Route::post('User/create',[UserController::class,'store'])->name('createuser');
    Route::get('User/delete',[UserController::class,'destroy'])->name('deleteeuser');
    Route::get('User/edit/{id}',[UserController::class,'edit'])->name('edituser');
    Route::post('User/update',[UserController::class,'update'])->name('updateuser');
    Route::post('User/updateBalance',[UserController::class,'updatebalance'])->name('updatebalance');

//    Plan Routes

    Route::get('Plan/Index',[\App\Http\Controllers\PlansController::class,'index'])->name('plainindex');
    Route::post('Plan/Store',[PlansController::class,'store'])->name('planstore');
    Route::get('Plan/Edit/{id}',[PlansController::class,'edit'])->name('planedit');
    Route::post('Plan/Update',[PlansController::class,'update'])->name('planupdate');
    Route::get('Plan/Delete',[PlansController::class,'destroy'])->name('plandelete');

    //   insurance Plan Routes

    Route::get('InsurancePlan/Index',[\App\Http\Controllers\InsuranceController::class,'index'])->name('insuranceplainindex');
    Route::post('InsurancePlan/Store',[\App\Http\Controllers\InsuranceController::class,'store'])->name('insuranceplainstore');
    Route::get('InsurancePlan/Delete',[\App\Http\Controllers\InsuranceController::class,'destroy'])->name('insuranceplaindelete');
    Route::get('InsurancePlan/Edit/{id}',[\App\Http\Controllers\InsuranceController::class,'edit'])->name('insuranceplanedit');
    Route::post('InsurancePlan/Update',[\App\Http\Controllers\InsuranceController::class,'update'])->name('insuranceplainupdate');

    //                          User Selected Plan Routes

    Route::get('SelectedPlans/Index',[UserselectedplanController::class,'index'])->name('userselectedplanindex');
    Route::post('UserBalance/Store',[UserselectedplanController::class,'store'])->name('userbalancestore');
    Route::get('UserBalance/Edit/{id}',[UserselectedplanController::class,'edit'])->name('userbalanceedit');
    Route::post('UserBalance/Update',[UserselectedplanController::class,'update'])->name('userbalanceupdate');


       //                          User Selected Insurance Routes


Route::get('SelectedInsurance/Index',[UserselectedinsuranceController::class,'index'])->name('userselectedinsuranceindex');
Route::post('SelectedInsurance/Store',[UserselectedinsuranceController::class,'store'])->name('SelectedInsurancestore');
Route::get('SelectedInsurance/Edit/{id}',[UserselectedinsuranceController::class,'edit'])->name('userselectedinsuranceedit');
Route::post('SelectedInsurance/Update',[UserselectedinsuranceController::class,'update'])->name('SelectedInsuranceUpdate');

});




//                                       Admin Routes

//                                       User Routes

Route::group(['middleware' => ['auth'], 'prefix' => 'User'],function (){

    Route::get('dashboard',[\App\Http\Controllers\UserdashboardController::class,'index'])->name('dashboard');
    Route::get('roulette',[\App\Http\Controllers\RouletteController::class,'index'])->name('roulette');
    Route::get('rouletteaddprize/{prize}',[\App\Http\Controllers\RouletteController::class,'rouletteaddprize'])->name('rouletteaddprize');
    Route::get('roulettededbalance/{balance}',[\App\Http\Controllers\RouletteController::class,'roulettededbalance'])->name('roulettededbalance');
    Route::post('chooseplan',[UserdashboardController::class,'chooseplan'])->name('chooseplan');
    Route::post('chooseinsurance',[\App\Http\Controllers\UserdashboardController::class,'chooseinsurance'])->name('chooseinsurance');
    Route::post('/mark-as-read', [UserController::class,'markNotification'])->name('markNotification');

});

//                                       User Routes


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index', [App\Http\Controllers\UserController::class, 'index2'])->name('index2');
