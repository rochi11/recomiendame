<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function saludo()
    {
//        $productos = new Product();
//        $productos->find()->all();
        $list = "hola desde recomiendame";
        return response()->json($list);
    }
}
