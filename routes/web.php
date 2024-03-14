<?php
use App\Http\Controllers\CarController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/pnv', function(){
//     return view('home', ['name' => 'Hùng']);
// })->name('pnv');
// Route::get('/pnv1', function(){
//     return view('home', ['name' => '<span style="color:green"><i>Hùng</i></span>']);
// })->name('pnv1');
// Route::get('/cars/{id}', [CarController::class, 'show'])->name('show');
// Route::resource('cars', 'CarController')->only('show');

Route::get('/', function(){
    return view('home', ['title' => 'Toidicode.com',
    'alertMessage' => 'Thong bao day']);
})->name('home');

Route::get('/post', function(){
    $posts =[
        ['name' => 'Post 1'],
        ['name' => 'Post 2'],
        ['name' => 'Post 3'],
        ['name' => 'Post 4'],
    ];
    return view('home', compact('posts'));
})->name('home');