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
        return view('admin.index');
//        $shop = new Shop;
//        $shop->s_name = '商户名';
//        $shop->save();
        $shops = Shop::all();
//        var_dump($shops);die();
        return view('admin.shops.index', ['name' => 'huliang', 'shops' => $shops]);
    }

    public function test()
    {
        $shop = Shop::find(1);
        $shop->s_intro = nl2br($shop->s_intro);

        return $this->successJson($shop);
    }
}