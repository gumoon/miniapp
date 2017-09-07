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

    public function listByCatId(Request $request)
    {
        $catId = $request->input('cat_id', 0);

        if($catId == 0) {
            $catIds = [1,2,3,4,5,6,7,8,9];
        } else {
            $catIds = [$catId];
        }

        $products = [];

        return $this->successJson($products);
    }
}