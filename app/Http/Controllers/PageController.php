<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'Syaikhul Shafwan R/2141720105';
    }

    public function articles($id){
        return 'Article ke '. $id;
    }

}
