<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserCreate;


class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
      $validateData = $request->validate( [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);    
       return view('home');
    }
     
   
}
