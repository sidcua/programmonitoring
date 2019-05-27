<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PagesController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function home(){
        $type = Auth::user()->type;
        if($type == 1){
            $view = view('dashboard');
        }
        else if($type == 2){
            $view = view('home');
        }
        return $view;
    }

    public function choice(){
        return view('choice');
    }

    public function addPercentage($semester){
        return view('percentage.add')->with('semester', $semester);
    }

    public function showFeedbackForm(){
        return view('feedback.index');
    }

    public function showOffice(){
        return view()->make('feedback.office');
    }

    public function showRate(){
        return view()->make('feedback.rate');
    }
    
    public function showSuccess(){
        return view()->make('feedback.success');
    }
    
}
