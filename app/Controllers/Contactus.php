<?php

namespace App\Controllers;

class Contactus extends BaseController
{
    public function index(): string
    {
        return view('contactus');
    }
}
