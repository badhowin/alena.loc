<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\AboutPage;
use App\AboutImage;

class AboutController extends Controller
{
    public function show() {
    	$aboutPage = AboutPage::get()->where('active', 1)->first();
        $aboutPage->aboutImage = AboutImage::get()->where('active', 1)->first()->img;
        return view('pages.about', $aboutPage);
    }


    public function edit(){

        $AboutImage = AboutImage::get()->where('active', 1)->first();
    	return view('pages.edit.about', ['aboutImage' => $AboutImage->img]);
    }

    public function save(Request $req){


        AboutPage::where('active', 1)->update(['active'=>'0']);
        $AboutPage = new AboutPage();
                        
        $AboutPage->header = $req->header;
        $AboutPage->content = $req->content;
        $AboutPage->language = $req->language;
        $AboutPage->active = 1;
        $AboutPage->save();
        
        return redirect()->route('about');
    }

    public function upload(Request $req){
        $imgPath = $req->file('aboutImage')->store('about', 'public');
        AboutImage::where('active', 1)->update(['active'=>'0']);

        $AboutImage = new AboutImage();
        $AboutImage->img = $imgPath;
        $AboutImage->active = 1;        
        $AboutImage->save();

        return redirect()->route('edit.about');
    }
}
