<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\IndexImage;

class IndexController extends Controller
{
    public function show(){

    	$indexImages = indexImage::orderBy('position')->get()->where('active', 1);
    	return view('pages.index', ['indexImages' => $indexImages]);
    }

    public function edit(){

    	$indexImages = indexImage::orderBy('position')->get()->where('active', 1);
    	return view('pages.edit.index', ['indexImages' => $indexImages]);
    }

    public function upload(Request $req){

    	$imgPath = $req->file('indexImage')->store('index', 'public');
    	$imgPosition = $req->position;
        IndexImage::where('active', 1)->where('position', $imgPosition)->update(['active'=>'0']);

        $IndexImage = new IndexImage();
        $IndexImage->img = $imgPath;
        $IndexImage->position = $imgPosition;
        $IndexImage->active = 1;        
        $IndexImage->save();

        return redirect()->route('edit.index');

    }
}
