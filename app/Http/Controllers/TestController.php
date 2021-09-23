<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function build()
    {
        return "建物です";
    }
    public function room($room)
    {
        return "部屋番号は".$room."です";
    }
}
