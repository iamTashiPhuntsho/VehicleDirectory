<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DirectoryController extends Controller
{
    public function getDirectorySearch () {
        return view('frontend.search');
    }
}
