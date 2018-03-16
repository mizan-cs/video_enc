<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;

class LiveController extends Controller
{
    public function update(){
    	$live = App\Live::first();
    	$live->live_url = request('live_url');
    	$live->save();

    	return redirect('$2y$10$PwnmP4QoXlM3dEFXbeQOsu23iOGsjdvn0r35r.jvY.SCbzQlhd.ga');
    }
}
