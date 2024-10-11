<?php

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

Route::get('/', function () {
    $resutl = DB::table('categories')->get();
        return view('welcome',['categories'=>$resutl]);
}        
);


Route::get('/product/{catid?}', function ($catid = null) {

    if ($catid == null) {
        $result = DB::table('product')->get();
        return view('Product', ['products' => $result]);
    }else{
        $result = DB::table('product')->where('category_id', $catid)->get();

        return view('Product', ['products' => $result]);
    }
});


//master
Route::get('/master', function () {
    return view('master');
}
);
//categories
Route::get('/category', function () {
    return view('category');
}
);

//about
Route::get('/about', function () {
    return view('about');
}
);

//contact


