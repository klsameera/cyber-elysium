<?php

namespace App\Http\Controllers\PublicArea;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('PublicArea.Pages.Home.index');
    }

    public function about()
    {
        return view('PublicArea.Pages.AboutUs.index');
    }

    public function privacy()
    {
        return view('PublicArea.Pages.PrivacyPolicy.index');
    }

    public function terms()
    {
        return view('PublicArea.Pages.TeamAndConditions.index');
    }


}
