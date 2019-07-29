<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Category;
use App\Post;

class FrontEndController extends Controller
{
    public function index(){

        $setting = Setting::first()->site_name;
        $categories = Category::take(5)->get();
        $post = Post::orderBy('created_at', 'desc')->first();

        return view('index')
                        ->with('title', $setting)
                        ->with('categories', $categories)
                        ->with('first_post', $post);
    }
}


