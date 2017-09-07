<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{

    public function __construct()
    {
        //
    }

    public function show(Request $request)
    {
        $shop = Shop::find(1);
        $shop->s_intro = nl2br($shop->s_intro);

        return $this->successJson($shop);
    }
}