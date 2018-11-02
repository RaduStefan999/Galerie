<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class PagesController extends Controller
{
    public function index()
    {
        $imgdata=DB::table('image-folder-1')->get();
        return view('welcome', compact('imgdata'));
    }
}
