<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Modules\About;

class AboutController extends Controller
{
    public function index()
    {
        return view('website.about');
    }
}
