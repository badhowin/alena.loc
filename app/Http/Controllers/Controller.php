<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function setLanguage($language){

    	if ($language == "") {

            if (session()->get('language') == "")
                $language = "en";
            else
                $language = session()->get('language');
        }  

        session()->put(['language' => $language]);

        return $language;
    }
}
