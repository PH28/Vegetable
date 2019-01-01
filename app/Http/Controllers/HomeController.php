<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Product;
use App\OrderDetail;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       /* $this->middleware('auth');*/
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()  //trang chủ
    {
        $new_products = Product::take(8)->orderBy('created_at', 'DESC')->paginate(8);
       return view('users.web.index', compact('new_products'));
    }


}

