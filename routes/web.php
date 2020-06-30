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


// 下記のようにルーティングをグループ化することもできる
// prefix メソッドを使って、グループ内の全てのルートの URI に admin を付ける
Route::prefix('admin')->group(function () {
    Route::get('form/{article_id?}', 'AdminBlogController@form')->name('admin_form');
    // 保存処理
    Route::post('post', 'AdminBlogController@post')->name('admin_post');
    // 削除処理
    Route::post('delete', 'AdminBlogController@delete')->name('admin_delete');
    // 一覧画面
    Route::get('list', 'AdminBlogController@list')->name('admin_list');

    // カテゴリー一覧
    Route::get('category', 'AdminBlogController@category')->name('admin_category');
    // カテゴリー追加・編集
    Route::post('category/edit', 'AdminBlogController@editCategory')->name('admin_category_edit');
    // カテゴリー削除
    Route::post('category/delete', 'AdminBlogController@deleteCategory')->name('admin_category_delete');
});

// トップ画面
Route::get('/', 'FrontBlogController@index')->name('front_index');
