<?php


namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('Admin/home/index');
    }

    public function minor()
    {
        return view('Admin/home/minor');
    }

}