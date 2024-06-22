<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Language;

class PhotographyController extends Controller
{
    public function show($language = '') {

    	$language = parent::setLanguage($language);

     	$languages = language::orderBy('position')->get();

    	return view('pages.photography', ['languages' => $languages]);
    }
}
