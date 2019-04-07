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

Route::get('/',[
    'uses' => 'AppController@index',
    'as' =>'home'
]);

Route::get('/new_book_form',[
    'uses'=> 'AppController@newBookForm',
    'as'=> 'newbook_form',
]);

Route::get('/new_category_form',[
    'uses'=> 'AppController@newCategoryForm',
    'as'=> 'newcategory_form',
]);


Route::post('/create_book',[
    'uses'=> 'AppController@createBook',
    'as'=> 'create_book',
]);

Route::post('/create_category',[
    'uses'=> 'AppController@createCategory',
    'as'=> 'create_category',
]);

Route::get('/edit/{id}',[
    'uses'=> 'AppController@editBookForm',
    'as'=> 'edit_book_form'
]);

Route::post('/edit',[
    'uses'=> 'AppController@editBook',
    'as'=> 'edit_book'
]);


Route::get('/delete/{id}',[
    'uses'=> 'AppController@deleteBook',
    'as'=>'delete_book'
]);








