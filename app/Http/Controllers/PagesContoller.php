<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesContoller extends Controller
{
    //About Us 
    public function aboutUs(){
        return view('aboutUs');
    }

    // Contact Us
      public function contactUs(){
        return view('contactUs');
    }

    // FAQ
      public function faq(){
        return view('faq');
    }

    // Pricing
      public function pricing(){
        return view('pricing');
    }

    // Servicies
      public function servicesI(){
        return view('servicesI');
    }

        public function servicesII(){
        return view('servicesII');
    }

        public function servicesIII(){
        return view('servicesIII');
    }
}
