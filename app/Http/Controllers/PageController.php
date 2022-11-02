<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function getPageGlobal($slug) {
        $this->getSeoData();
        return view('page-global');
    }
    
    public function getIndex() {
        $this->getSeoData();
        return view('index');
    }

    public function getDownload() {
        $this->getSeoData();
        return view('pages/download');
    }

    public function getAboutUs() {
        $this->getSeoData();
        return view('pages/about-us');
    }

    public function getContact() {
        $this->getSeoData();
        return view('pages/contact');
    }

    public function getRefundPolicy() {
        $this->getSeoData();
        return view('pages/refund_policy');
    }

    public function getRenewalPolicy() {
        $this->getSeoData();
        return view('pages/renewal_policy');
    }
    public function getPrivacyPolicy() {
        $this->getSeoData();
        return view('pages/privacy_policy');
    }
    public function getTermOfService() {
        $this->getSeoData();
        return view('pages/termofservice');
    }
}
