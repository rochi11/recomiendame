<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function saludo()
    {
        $list = "hola desde recomiendame";
        return response()->json($list);
    }
}
