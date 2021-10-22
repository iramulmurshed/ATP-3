<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function showHomePage()
    {

        return view('pages.home');
    }
    public function showServicesPage()
    {
        $allServices=[
            "s1" => "service 1",
            "s2" => "service 2",
            "s3" => "service 3"
        ];
        return view('pages.services')->with('data',$allServices);
    }
    public function showOurTeamsPage()
    {
        return view('pages.our-teams');
    }
    public function showAboutUsPage()
    {
        return view('pages.about-us');
    }
    public function showContactUsPage()
    {
        return view('pages.contact-us');
    }

}
