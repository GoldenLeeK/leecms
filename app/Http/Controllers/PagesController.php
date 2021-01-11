<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //首页
    public function root()
    {
        $title = '';
        $description = '';
        return view('pages.root',compact('title','description'));
    }
}
