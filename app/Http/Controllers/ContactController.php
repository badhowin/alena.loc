<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ContactPage;
use App\AboutImage;
use App\Language;

class ContactController extends Controller
{
     public function show($language = '') {

     	$language = parent::setLanguage($language);

     	$languages = language::orderBy('position')->get();

    	return view('pages.contact', ['languages' => $languages]);
    }

    public function edit(){

        $languages = language::orderBy('position')->get();

        return view('pages.edit.contact', ['languages' => $languages]);
    }

    public function save(Request $req){


        ContactPage::where('active', 1)->where('language', $req->language)->update(['active'=>'0']);
        $ContactPage = new ContactPage();
                        
        $ContactPage->header = $req->header;
        $ContactPage->content = $req->content;
        $ContactPage->language = $req->language;
        $ContactPage->active = 1;
        $ContactPage->save();
        
        return redirect()->route('edit.contact');
    }
}
