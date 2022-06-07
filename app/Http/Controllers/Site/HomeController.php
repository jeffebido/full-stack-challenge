<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageViews;
use App\Models\Testimonials;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {   
        PageViews::increment('views');

        $data = [
            'testimonials' => Testimonials::orderByDesc('created_at')->get()
        ];

        return view('site.pages.home', $data);
    }
}
