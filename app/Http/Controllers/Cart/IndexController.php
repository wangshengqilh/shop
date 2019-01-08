<?php

namespace App\Http\Controllers\Cart;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function __construct()
    {

    }
    //
    public function index(Request $request)
    {
        echo __METHOD__;
    }
}
