<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data = ['contact'=>'contact_value'];
        return view('contact',compact('data'));
    }
}
