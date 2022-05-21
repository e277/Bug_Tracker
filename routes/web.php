<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\DBcontroller;
use App\Http\Controllers\DBcontroller1;
use App\Http\Controllers\UserAdd;
use App\Http\Controllers\UserDeleteController;
use App\Http\Controllers\UserDBquerybuilder;
use App\Http\Controllers\MailController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BugController;
use App\Http\Controllers\DevController;
use App\Http\Controllers\UserController;



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

Auth::routes();

// User
Route::middleware('auth')->group(function () {
   Route::get('/user-home', [HomeController::class, 'index']);
   Route::get('/user-project', [UserController::class, 'viewProject']);
   Route::get('/user-bug', [UserController::class, 'viewBug']);

});


Route::get('/', function() {
   return view('index');
});

Route::middleware(['adminProtectedPages', 'auth'])->group(function() {
   // Admin
   Route::get('/admin-home', [HomeController::class, 'adminHome']);
   // Project
   Route::get('/view-project', [ProjectController::class, 'view']);
   Route::get('/create-project', [ProjectController::class, 'create']);
   Route::post('/create-project', [ProjectController::class, 'save']);
   Route::get('/delete-project/{id}', [ProjectController::class, 'delete']);
   Route::get('/edit-project/{id}', [ProjectController::class, 'editPage']);
   Route::post('/edit-project/{id}', [ProjectController::class, 'edit']);
   // Bug
   Route::get('/view-bug', [BugController::class, 'view']);
   Route::get('/create-bug', [BugController::class, 'create']);
   Route::post('/create-bug', [BugController::class, 'save']);
   Route::get('/delete-bug/{id}', [BugController::class, 'delete']);
   Route::get('/edit-bug/{id}', [BugController::class, 'editPage']);
   Route::post('/edit-bug/{id}', [BugController::class, 'edit']);
   // Developer
   Route::get('/view-dev', [DevController::class, 'view']);
   Route::post('/view-dev/{id}', [DevController::class, 'addDeveloper']);
   // Route::get('/create-dev', [DevController::class, 'create']);
   // Route::post('/create-dev', [DevController::class, 'save']);
   Route::get('view-dev/status/{user_id}/{status_code}', [DevController::class, 'updateStatus']);
});



// CRUD
// Route::get('/fetch1', [DBcontroller::class, 'display']);
// Route::get('/fetch2', [DBcontroller1::class, 'display']);
// Route::get('/add', [UserAdd::class, 'addData']);
// Route::post('/add', [UserAdd::class, 'storeData']);
// Route::get('/list', [UserDeleteController::class, 'displayData']);
// Route::get('/delete/{id?}', [UserDeleteController::class, 'deleteData']);
// Route::get('/edit/{id?}', [UserDeleteController::class, 'showData']);
// Route::post('/edit/{id?}', [UserDeleteController::class, 'updateData']);


// Middleware
// Route::get('/noaccess', function() {
//     return view('restrict');
// });

// Route::group(['middleware'=>['protectedpage']], function() {
//     Route::view('/contact', 'contact');
//     Route::view('/about', 'about');
// });

// Route::get('/login', function() {
//     return view('/users');
// })->middleware('protectedpage');

// Query Builder
Route::get('/userlist', [UserDBquerybuilder::class, 'DBquery']);
// Mail Function
Route::get('/send-mail', [MailController::class, 'sendEmail']);
