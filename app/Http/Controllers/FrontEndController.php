<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Category;
use App\Post;
use App\Tag;

class FrontEndController extends Controller
{
    public function index(){

        $setting = Setting::first()->site_name;
        $categories = Category::take(5)->get();
        $first_post = Post::orderBy('created_at', 'desc')->first();
        $second_post = Post::orderBy('created_at', 'desc')->skip('1')->take('1')->get()->first();
        $third_post = Post::orderBy('created_at', 'desc')->skip('2')->take('1')->get()->first();
        $ruby_rails = Category::find(6);
        $flutter = Category::find(5);
        $settings = Setting::first();

        return view('index')
                        ->with('title', $setting)
                        ->with('categories', $categories)
                        ->with('first_post', $first_post)
                        ->with('second_post', $second_post)
                        ->with('third_post', $third_post)
                        ->with('ruby_rails', $ruby_rails)
                        ->with('flutter', $flutter)
                        ->with('settings', $settings);
    }


    public function singlePost($slug){

        
        $categories = Category::take(5)->get();
        $settings = Setting::first();
        $post = Post::where('slug', $slug)->first();
        $tags = Tag::all();

        $next_id = Post::where('id', '>', $post->id)->min('id');
        $prev_id = Post::where('id', '<', $post->id)->max('id');

        return view('single')->with('post', $post)
                        ->with('title', $post->title)
                        ->with('categories', $categories)
                        ->with('settings', $settings)
                        ->with('next', Post::find($next_id))
                        ->with('prev', Post::find($prev_id))
                        ->with('tags', $tags);

    }


    public function category($id){

        $category = Category::find($id);
        $settings = Setting::first();
        $categories = Category::take(5)->get();

        return view('category')->with('category', $category)
                                ->with('title', $category->name)
                                ->with('settings', $settings)
                                ->with('categories', $categories);
    }


    public function tag($id){

        $tag = Tag::find($id);
        $settings = Setting::first();
        $categories = Category::take(5)->get();

        return view('tag')->with('tag', $tag)
                          ->with('title', $tag->tag)
                          ->with('settings', $settings)
                          ->with('categories', $categories);
    }







}


