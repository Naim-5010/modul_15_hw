<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\demoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;

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

// Route::get('/hw', function () {
//     // return view('welcome');
//     return "hello hw";
// });


// // 👀👀 Task 2: Request Redirect
// Route::get('/dashboard', function () {
//     return "dashboard using a 302 redirect";
// });
// Route::get('/home', function () {
//     return redirect('/dashboard');
// });

// //👀👀 Task 3: Global Middleware
// Route::get('/hw', [demoController::class, "action"]);

// //👀👀Task 4: Route Middleware
// Route::middleware(['hello'])->group(function () {

// Route::get('/action1', [demoController::class, "author1"]);
//     Route::get('/action2', [demoController::class, "author2"]);
// });

// //👀👀 Task 5: Controller
// Route::get('/products', [ProductController::class, 'index']);
// Route::get('/products/create', [ProductController::class, 'create']);
// Route::post('/products', [ProductController::class, 'store']);
// Route::get('/products/{id}/edit', [ProductController::class, 'edit']);
// Route::put('/products/{id}', [ProductController::class, 'update']);
// Route::delete('/products/{id}', [ProductController::class, 'destroy']);



// //👀👀 Task 6: Single Action Controller
// Route::get('/action/{email}/{address}', ContactController::class);


// //👀👀 Task 7: Resource Controller
// Route::resource('photo', PostController::class);
