<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function home() {
        $this->data['has_video'] = true;

        return view('web/landing/home', $this->data);
    }

    public function menu() {
        $this->data['has_video'] = false;

        return view('web/landing/menu', $this->data);
    }
}
