<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function blogs()
    {
        return redirect('http://localhost:8080/blogs');
    }
    public function about()
    {
        return view('front.about');
    }
}
