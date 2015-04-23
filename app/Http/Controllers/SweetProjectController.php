<?php namespace App\Http\Controllers;
class SweetProjectController extends Controller {
    public function makeHomePage(){
        return view('homepage');
    }
}