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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/show/{var1}/{var2}/{var3}', [App\Http\Controllers\TestController::class, 'showOne']);
Route::get('/show/{var1}/{var2}/{var3}/{color}', [App\Http\Controllers\TestController::class, 'showTwo']);
Route::get('/show1/{city}', [App\Http\Controllers\TestController::class, 'showThree']);
Route::get('/show1', [App\Http\Controllers\TestController::class, 'show1Three']);
Route::get('/showCountry/{country}-{city}', [App\Http\Controllers\TestController::class, 'showFour']);
Route::get('/showCountry/-{city}', [App\Http\Controllers\TestController::class, 'showCityFour']);
Route::get('/showCountry/{country}-', [App\Http\Controllers\TestController::class, 'showCountryFour']);
Route::get('/showCountry/-', [App\Http\Controllers\TestController::class, 'showCountryCityFour']);
Route::get('/showIf-{text}', [App\Http\Controllers\TestController::class, 'showIf']);
Route::get('/showIfArr-{text}', [App\Http\Controllers\TestController::class, 'showIfArr']);
Route::get('/for', [App\Http\Controllers\TestController::class, 'for1']);
Route::get('/for/{text}', [App\Http\Controllers\TestController::class, 'for2']);
Route::get('/for3', [App\Http\Controllers\TestController::class, 'for3']);
Route::get('/for4/{data}', [App\Http\Controllers\TestController::class, 'for4']);
Route::get('/forfor', [App\Http\Controllers\TestController::class, 'forfor']);
Route::get('/forEmployees', [App\Http\Controllers\TestController::class, 'forEmployees']);
Route::get('/forRemaining', [App\Http\Controllers\TestController::class, 'forRemaining']);
Route::get('/nasledovanie', [App\Http\Controllers\TestController::class, 'nasledovanie']);
Route::get('/nasledovanie2/{text1}/{text2}/{text3}/{aside}', [App\Http\Controllers\TestController::class, 'nasledovanie2']);
Route::get('/nasledovanie3/{text1}/{text2}/{text3}/{aside}', [App\Http\Controllers\TestController::class, 'nasledovanie3']);
Route::get('/ex', [App\Http\Controllers\ExController::class, 'ex']);
Route::get('/ex/{str}', [App\Http\Controllers\ExController::class, 'ex2']);
Route::get('/post/test1/{id}', [App\Http\Controllers\PostController::class, 'showOne']);
Route::get('/post/test1', [App\Http\Controllers\PostController::class, 'showOne']);
Route::get('/post2/test', [App\Http\Controllers\PostController::class, 'showAll']);
Route::get('/product/{category_id}/{product_id}', [App\Http\Controllers\ProductController::class, 'product']);
Route::get('/product/{category_id}', [App\Http\Controllers\ProductController::class, 'productCategory']);
Route::get('/categories', [App\Http\Controllers\ProductController::class, 'showCategoryList']);
Route::get('/form', [App\Http\Controllers\TestController::class, 'form']);
Route::get('/form/test2', [App\Http\Controllers\TestController::class, 'form2']);
Route::get('/formAction', [App\Http\Controllers\TestController::class, 'formAction']);
Route::get('/formActionAdd', [App\Http\Controllers\TestController::class, 'formAction']);
Route::get('/formActionPost', [App\Http\Controllers\TestController::class, 'formActionPost']);
Route::match(['get', 'post'], '/formActionAddPost', [App\Http\Controllers\TestController::class, 'formActionAddPost']);
Route::match(['get', 'post'],'/formPost', [App\Http\Controllers\TestController::class, 'formPost']);
Route::match(['get', 'post'],'/formPostReg', [App\Http\Controllers\TestController::class, 'formPostReg']);
Route::match(['get', 'post'],'/formPostRoute/{id}', [App\Http\Controllers\RequestController::class, 'formPostRoute']);
Route::get('/get/', [App\Http\Controllers\RequestController::class, 'methodGet']);
Route::get('/pushArrEx/', [App\Http\Controllers\RequestController::class, 'pushEx']);
Route::get('/pullExSend/', [App\Http\Controllers\RequestController::class, 'pullExSend']);
Route::get('/pullEx/', [App\Http\Controllers\RequestController::class, 'pullEx']);
Route::get('/hasEx/', [App\Http\Controllers\RequestController::class, 'hasEx']);
Route::match(['get','post'], '/redirect/', [App\Http\Controllers\RedirectController::class, 'test']);
Route::get('/redirect/test/', [App\Http\Controllers\RedirectController::class, 'test2']);
Route::match(['get','post'], '/redirectEmail', [App\Http\Controllers\RedirectController::class, 'redirectEmail']);
Route::get('/redirectName/test', [App\Http\Controllers\RedirectController::class, 'redirectName']);
Route::get('/redirectName', [App\Http\Controllers\RedirectController::class, 'redirectName2'])->name('test');
Route::get('/redirectParam/{value1}/{value2}', [App\Http\Controllers\RedirectController::class, 'redirectParam']);
Route::get('/redirectParam/test/{value1}/{value2}', [App\Http\Controllers\RedirectController::class, 'redirectParamTest'])->name('testParam');
Route::get('/flesh', [App\Http\Controllers\FleshController::class, 'flesh1']);
Route::get('/fleshKey', [App\Http\Controllers\FleshController::class, 'flesh2']);
Route::get('/flesh/test', [App\Http\Controllers\FleshController::class, 'fleshTest']);
Route::get('/flesh/test2', [App\Http\Controllers\FleshController::class, 'fleshTest2']);
Route::get('/response/test/1', [App\Http\Controllers\ResponseController::class, 'responseTest']);
Route::get('/response/test/2', [App\Http\Controllers\ResponseController::class, 'responseBlade']);
Route::get('/cookie/test/1', [App\Http\Controllers\CookieController::class, 'cookieTest']);
Route::get('/cookie/test/2', [App\Http\Controllers\CookieController::class, 'refreshCookie']);
Route::get('/web/', [App\Http\Controllers\WebController::class, 'web']);
Route::get('/DB/test/1', [App\Http\Controllers\DatabaseController::class, 'DB']);
Route::get('/DB/test/2', [App\Http\Controllers\DatabaseController::class, 'DBTest2']);
Route::get('/DB/test/3', [App\Http\Controllers\DatabaseController::class, 'DBTest3']);
Route::get('/DB/test/4', [App\Http\Controllers\DatabaseController::class, 'DBTest4']);
Route::get('/eloquent/test/1', [App\Http\Controllers\EloquentController::class, 'eloquentTest1']);
Route::get('/eloquent/test/2', [App\Http\Controllers\EloquentController::class, 'eloquentTest2']);
Route::get('/eloquent/test/3/{id}', [App\Http\Controllers\EloquentController::class, 'eloquentTest3']);
Route::get('/eloquent/test/4/{order}', [App\Http\Controllers\EloquentController::class, 'eloquentTest4']);
Route::get('/eloquent/test/5/{order}/{dir}', [App\Http\Controllers\EloquentController::class, 'eloquentTest5']);
Route::match(['get', 'post'], '/eloquent/test/6', [App\Http\Controllers\EloquentController::class, 'newPost']);
Route::match(['get', 'post'], '/eloquent/test/7', [App\Http\Controllers\EloquentController::class, 'editPost']);
Route::match(['get', 'post'], '/eloquent/test/8/{id}', [App\Http\Controllers\EloquentController::class, 'editPostId']);
Route::get('/eloquent/test/9/{id}', [App\Http\Controllers\EloquentController::class, 'delPostId']);
Route::get('/eloquent/test/10/', [App\Http\Controllers\EloquentController::class, 'midlDel']);
Route::get('/eloquent/test/11/', [App\Http\Controllers\EloquentController::class, 'getDeletedPost']);

Route::get('/practice/', [App\Http\Controllers\PracticeController::class, 'exampleOne']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
