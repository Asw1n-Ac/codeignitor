<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function index(): string
    {
        return view('shop');
    }
    // public function product(): string
    // {
    //     return view('product');
    // }

    public function mobile(): string 
    {
            return view('mobile');
    }
}
