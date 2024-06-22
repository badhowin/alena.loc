<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
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
}
