<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Hello there!!';
        // return view('pages.index', compact('title'));
        // return view('pages.index');
        // return view('pages.index')->with('title', $title);
        return view('pages.dynamicLanding')->with('title', $title);
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        // $data = array(
        //     'title' => 'Services',
        //     'services' => ['Web Design', 'Programming', 'SEO']
        // );
        // return view('pages.services')->with($data);
        return view('pages.services');
    }
}
