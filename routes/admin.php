<?php
/**
 * Created by PhpStorm.
 * User: gumoon
 * Date: 2017/7/1
 * Time: 15:47
 */

//管理后台
Route::get('/', 'IndexController@index');
Route::get('/index/test', 'IndexController@test');
Route::get('/shops', 'ShopController@index');
Route::get('/shops/edit', 'ShopController@edit');
