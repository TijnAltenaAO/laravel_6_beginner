<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    
    public function about()
    {
        return view('about');
    }
    public function service()
    {
        $services = ['service1', 'service2', 'service3', 'service4'];
        return view('service', compact('services'));
    }
}
