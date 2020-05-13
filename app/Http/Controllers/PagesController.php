<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function about()
    {
        return view('pages.about');
    }public function services()
    {
        $data = array(
          'title'=>'This is the services page',
          'services'=>['Java','Python','PHP']
        );
        return view('pages.services')->with($data);
    }
}
