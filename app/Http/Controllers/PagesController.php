<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{

    public function homePage()
    {

        $title = __('pages.homePage');
        return view('home', compact('title'));

    }
    public function aboutPage()
    {

        $title = __('pages.about');
        return view('about', compact('title'));

    }
    public function departmentsPage()
    {

        $title = __('pages.departments');
        return view('departments', compact('title'));

    }
    public function departmentPage()
    {

        $title = __('pages.department');
        return view('department', compact('title'));

    }
    public function doctorsPage()
    {

        $title = __('pages.doctors');
        return view('doctors', compact('title'));

    }
    public function contactPage()
    {

        $title = __('pages.contact');
        return view('contact', compact('title'));

    }
    public function careersPage()
    {

        $title = __('pages.careers');
        return view('careers', compact('title'));

    }
}
