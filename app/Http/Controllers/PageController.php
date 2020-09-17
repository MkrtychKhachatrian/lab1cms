<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function index(Request $request)
    {
        $url = $request->path();
        $page = Page::where('path', $url)->first();
        if ($request->is('landing')) {
            return view('landing', ['page' => $page]);
        }
        if ($request->is('orthodontics')) {
            return view('orthodontics', ['page' => $page]);
        }
        if ($request->is('therapy')) {
            return view('therapy', ['page' => $page]);
        }
        if ($request->is('surgery')) {
            return view('surgery', ['page' => $page]);
        }

    }
}
