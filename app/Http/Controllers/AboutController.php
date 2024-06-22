<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\AboutPage;
use App\AboutImage;
use App\Language;

class AboutController extends Controller
{
    public function show($language = '') {


        $language = parent::setLanguage($language);

    	$aboutPage = AboutPage::get()->where('active', 1)->where('language', $language)->first();
    	//$aboutPage->aboutImage = AboutImage::get()->where('active', 1)->first()->img;
        $languages = language::orderBy('position')->get();
        return view('pages.about', ['aboutPage' => $aboutPage, 'languages' => $languages]);
    }


    public function edit(){

        $AboutImage = AboutImage::get()->where('active', 1)->first();
        $languages = language::orderBy('position')->get();

        return view('pages.edit.about', ['aboutImage' => $AboutImage->img, 'languages' => $languages]);
    }

    public function save(Request $req){


        AboutPage::where('active', 1)->where('language', $req->language)->update(['active'=>'0']);
        $AboutPage = new AboutPage();
                        
        $AboutPage->header = $req->header;
        $AboutPage->content = $req->content;
        $AboutPage->language = $req->language;
        $AboutPage->active = 1;
        $AboutPage->save();
        
        return redirect()->route('edit.about');
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
