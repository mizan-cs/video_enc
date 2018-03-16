<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class AdminController extends Controller
{
    public function index(){
    	$videos = App\Video::all();
    	$live = App\Live::first();
    	return view('admin',compact('videos','live'));
    }

    // public function video_code(){
    // 	$codes = App\Video::all();
    // 	return view('admin.sections.video_code');
    // }
}
