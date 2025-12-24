<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function getHome(){
        return view('site.home');
    }

    public function getAboutUs(){
        return view('site.about');
    }

    public function getServices(){
        return view('site.services');
    }

    public function getContactUs(){
        return view('site.contact');
    }

    public function getGallery(){
        return view('site.gallery');
    }

    public function getBlogs(){
        return view('site.blogs');
    }

    public function getServiceDetail(){
        return view('site.service-detail');
    }

    public function getBlogDetail(){
        return view('site.blog-detail');
    }
}
