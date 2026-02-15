<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home');
    }

    public function about(): View
    {
        return view('pages.about');
    }

    // public function whyChooseUs(): View
    // {
    //     return view('pages.why-choose-us');
    // }

    // public function ourMission(): View
    // {
    //     return view('pages.our-mission');
    // }

    // public function ourVision(): View
    // {
    //     return view('pages.our-vision');
    // }

    public function services(): View
    {
        return view('pages.services');
    }

    public function contact(): View
    {
        return view('pages.contact');
    }

    public function faq(): View
    {
        return view('pages.faq');
    }
}
