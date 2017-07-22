<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Shop;

class ShopController extends Controller
{

    public function __construct()
    {
        //
    }

    public function index()
    {
        $shops = Shop::all();
//        var_dump($shops);die();
        return view('admin.shops.index', ['name' => 'huliang', 'shops' => $shops]);
    }

    public function add()
    {

    }

    public function edit()
    {
        $shop = null;
        return view('admin.shops.add');
    }
}