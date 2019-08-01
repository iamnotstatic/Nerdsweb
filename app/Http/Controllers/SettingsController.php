<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use Session;

class SettingsController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }

    public function index(){

        $setting = Setting::first();

        return view('admin.settings.settings')->with('setting', $setting);
    }

    public function update(){

        $this->validate(request(), [
            'site_name' => 'required',
            'address' => 'required',
            'contact_number' => 'required',
            'contact_email' => 'required',
            'about_site' => 'required'
        ]);
        
        $settings = Setting::first();

        $settings->site_name = request()->site_name;
        $settings->address = request()->address;
        $settings->contact_number = request()->contact_number;
        $settings->contact_email = request()->contact_email;
        $settings->about_site = request()->about_site;

        $settings->save();

        Session::flash('success', 'Successfully updated Settings');

        return redirect()->back();
    }
}
