<?php

/**
 * Created by PhpStorm.
 * User: gumoon
 * Date: 2017/7/1
 * Time: 15:40
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Shop;

class IndexController extends Controller
{

    public function __construct()
    {
        //
    }

    public function index()
    {
//        $shop = new Shop;
//        $shop->s_name = '商户名';
//        $shop->save();
        $shops = Shop::all();
        var_dump($shops);die();
        return view('admin.index', ['name' => 'huliang']);
    }

    public function test()
    {
        return $this->successJson();
    }
}