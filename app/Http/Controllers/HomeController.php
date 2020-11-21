<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = Post::all();
        // dd($data);//that is dump and die
        return view('home',compact('data'));
    }
}
