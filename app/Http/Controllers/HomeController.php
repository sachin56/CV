<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('index');
    }

    public function formDetails($id)
    {
        $design = $id;

        if($design == 1) {
            return view('form',['design'=>$design]);
        }
        else if($design == 2) {
            return view('form2',['design'=>$design]);
        }
        else if($design == 3){
            return view('form3',['design'=>$design]);
        }
        else if($design == 4){
            return view('form4',['design'=>$design]);
        }
        else if($design == 5) {
            return view('form5',['design'=>$design]);
        }
        else if($design == 6) {
            return view('form6',['design'=>$design]);
        }
        else if($design == 7) {
            return view('form7',['design'=>$design]);
        }
        else if($design == 8) {
            return view('form8',['design'=>$design]);
        }
        else if($design == 9) {
            return view('form9',['design'=>$design]);
        }


    }
}
