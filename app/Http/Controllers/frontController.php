<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\page as Pages;

class frontController extends Controller
{
    //
    public function show($slug = "home")
    {
        if ($slug == "admin") {
            return redirect('admin/login');
        }

        $data = Pages::where('name', $slug)->get()->count();
        if ($data > 0) {
            return view('front.' . $slug)->with('slug', $slug);
        } else {
            return view('error.error');
        }
    }
}
