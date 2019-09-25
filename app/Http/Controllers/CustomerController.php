<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function repair()
    {
        return view("repair");
    }

    public function delete()
    {
        return view("delete");
    }

    public function destroy()
    {
        return view("index");
    }
}
