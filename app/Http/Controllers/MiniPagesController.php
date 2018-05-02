<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiniPagesController extends Controller
{
    public function handleHome(){
        if(!auth()->check()) {
            return redirect()->route('login');
        }else{
            return view('welcome');
        }
    }
}
