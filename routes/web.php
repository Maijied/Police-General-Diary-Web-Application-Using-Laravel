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

Route::get('/', function () {
	return view('welcome');
});

Auth::routes();

//authentication
Route::group(['middleware' => 'auth'], function()
{
	Route::get('/home', function () {
	return view('welcome');
});

	Route::get('/getPDF','PDFController@getPDF');
	//search result
Route::get('/get','PDFController@get');
Route::get('/get_passport','PDFController@get_passport');
Route::get('/get_others','PDFController@get_others');
Route::get('/get_nid','PDFController@get_nid');
Route::get('/get_mobile','PDFController@get_mobile');
Route::get('/get_cheque','PDFController@get_cheque');
// Route::get('/print','PDFController@getPDF');
Route::get('/barryvdh','PDFController@getPDF');
//insert data
Route::post('/insert','PDFController@insert');
Route::post('/insert_passport','PDFController@insert_passport');
Route::post('/insert_mobile','PDFController@insert_mobile');
Route::post('/insert_nid','PDFController@insert_nid');
Route::post('/insert_bank','PDFController@insert_bank');
//page selection for search
Route::post('/gd',
	function ()
	{



		return view('gdselect');
	}

);
Route::post('/passport',
	function ()
	{



		return view('gdpassport');
	}

);
Route::post('/mobile',
	function ()
	{



		return view('mobile');
	}

);
Route::post('/nid',
	function ()
	{



		return view('nid');
	}

);
Route::post('/cheque',
	function ()
	{



		return view('bank');
	}

);
Route::post('/other',
	function ()
	{



		return view('gd');
	}

);

Route::post('/gdsearch',
	function ()
	{



		return view('gdsearch');
	}

);
//gd search result
Route::post('/gdsearchresult','PDFController@gdsearch');
Route::post('/gdsearchresult_others','PDFController@gdsearch_others');
Route::post('/gdsearchresult_passport','PDFController@gdsearch_passport');
Route::post('/gdsearchresult_nid','PDFController@gdsearch_nid');
Route::post('/gdsearchresult_mobile','PDFController@gdsearch_mobile');
Route::post('/gdsearchresult_cheque','PDFController@gdsearch_cheque');
// Route::post('/gdsearchresult',function(Request $req){

// if($req->input('gd_type')=='passport'){
// return view('gdsearch_passport');

// }


// }




// );



});
Route::get('/logout','Auth\LoginController@logout');
