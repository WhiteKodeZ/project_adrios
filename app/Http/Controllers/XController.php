<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class XController extends Controller
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
        return view('serviceI');
    }

        public function servicesII(){
        return view('serviceII');
    }

        public function servicesIII(){
        return view('serviceIII');
    }
}
