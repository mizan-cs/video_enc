<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class VideoController extends Controller
{
    public function submit(Request $request){
    	$password = $request->password;

        $a = App\Video::where('code',$password)->first();
    	if($a != null){
            $a->access = 'Yes';
            $a->save();
            return response()->json(['code'=>'True']);
    	}
    	else{
    		return response()->json(['code'=>'False']);
    	}
    	
    }

    public function insertCode(){
        $code = new App\Video();
        $code->code = request('code');
        $code->access = 'No';
        $code->save();
        return redirect('$2y$10$PwnmP4QoXlM3dEFXbeQOsu23iOGsjdvn0r35r.jvY.SCbzQlhd.ga');
    }
}
