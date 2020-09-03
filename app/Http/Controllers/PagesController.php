<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function getIndex()
    {
        # code...
        return view('pages.welcome');

    }

    public function getContact()
    {
        # code...
        return view('pages.contact');
    }

    public function getAbout()
    {
        $first = 'Akshay';
        $last = 'Krishnan';
        $full = $first.' '.$last;
        $email = 'akshaykrishnan@gmail.com';
        return view('pages.about')->withFull($full)->withEmail($email);
    }
}
