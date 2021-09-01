<?php

namespace App\Http\Controllers;

use App\Http\Requests\Upload;
use App\Models\Image;
use Illuminate\Http\Request;

class IGController extends Controller
{   
    public function __construct(){
        $this->middleware('auth');
    }

    public function getHomepage(){

        $user_posts = Image::all();

        return view('homepage', ['user_posts' => $user_posts]);
    }

    public function getUploadPage(){
        return view('newpost');
    }

    public function uploadPost(Upload $newpost){

        Image::create([
            'location' => $newpost->input('location'),
            'img' => $newpost->file('img')->store('public/images'),
            'caption'=> $newpost->input('input')
        ]);
        
        return redirect('/newpost')->with('message', 'Post pubblicato.');
    }
}
