<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller {
    
    public function getIndex() {
        return view('pages.index');
    }

    public function getAbout() {
        return view('pages.about');
    }

}
