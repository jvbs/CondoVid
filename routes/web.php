<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use \GuzzleHttp\Client;
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
    return view('auth/login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $client = new Client();
    $response = $client->get('http://localhost:5005/api/condovid');
    $body = $response->getBody()->getContents();
    $data = json_decode($body);

    return view('dashboard', compact('data'));
})->name('dashboard');


Route::get('login/{provider}', [LoginController::class, 'redirectToProvider'])->name('social.login');
Route::get('login/{provider}/callback', [LoginController::class, 'handleProviderCallback'])->name('social.callback');
