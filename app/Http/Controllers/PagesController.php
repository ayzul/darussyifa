<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getWelcome () {
        return view('pages.welcome');
    }

    public function getAbout () {
        return view('pages.about');
    }

    public function getVisitor () {
        return view('pages.visitor');
    }

    public function getReferences () {
        return view('pages.references');
    }

    public function getContact () {
        return view('pages.contact');
    }
}
