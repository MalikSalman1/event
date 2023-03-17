<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Catogaries;
use App\Models\Blog;

class MainController extends Controller
{
    public function index()
    {
        
        if(session()->has('LoggedUser'))
        {
            
            return view('home');
        }
        else{
            return redirect('login');
        }
        
    }
    public function login()
    {
        return view('login');
    }
    public function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('login');
        }
        else{
            return redirect('login');
        }
    }
}
