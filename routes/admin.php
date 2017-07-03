<?php
/**
 * Created by PhpStorm.
 * User: gumoon
 * Date: 2017/7/1
 * Time: 15:47
 */

//管理后台
Route::get('/', 'IndexController@index');
Route::post('/index/test', 'IndexController@test');