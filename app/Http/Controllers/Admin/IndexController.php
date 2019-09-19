<?php


namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('Admin/layouts/app');
    }

    public function default()
    {
        return view('Admin/home/index');
    }

    public function minor()
    {
        return view('Admin/home/minor');
    }
    public function index2()
    {
        return view('Admin/home/index2');
    }
    public function index1()
    {
        return view('Admin/home/index1');
    }

}
