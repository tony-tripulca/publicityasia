<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class LandingPageController extends Controller
{
    public function home()
    {
        $this->data['has_video'] = true;

        if (!\Cookie::get('loaded')) {
            $this->data['main_page'] = true;
        } else {
            $this->data['main_page'] = false;
        }

        \Cookie::queue("loaded", 1, 10);

        return view('web/landing/home', $this->data);
    }

    public function menu()
    {
        $this->data['has_video'] = false;
        $this->data['main_page'] = false;

        return view('web/landing/menu', $this->data);
    }
}
