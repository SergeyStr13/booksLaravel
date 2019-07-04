<?php

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
use \Illuminate\Http\Request;
use App\Book;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/autoService', function () {
    return view('autoService');
});

Route::get('/testHtmlTag', function () {
    return view('testHtmlTag');
});

Route::get('/books', 'BookController@bookAll');
Route::post('/bookAdd', 'BookController@add');

/*Route::post('/bookAdd', function (Request $request) {
	$validator = Validator::make($request->all(),
		['title' => 'required|max:255']
	);

	if ($validator->fails()) {
		return redirect('/books')->withInput()->withErrors($validator);
	}
	$book = new Book($request->all());
	$book->save();
	return redirect('/books');
});*/

Route::get('/bookDelete/{book}', function (Book $book) {
	$book->delete();
	return redirect('/books');

});

Route::get('/home', 'HomeController@index');

Route::resource('articles', 'ArticleController');
