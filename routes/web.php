<?php

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
    $result['message'] = 'Here Is your Request Details';
    $result['url'] = 'http://127.0.0.1:8000/api/importCsv';
    $result['method'] = 'POST';
    $result['body'] = (object)['file' => 'your file'];
    return $result;
});