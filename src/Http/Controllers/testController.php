<?php 

namespace TeamBravo\Payment\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class testController extends Controller{

    public function test(){
        return view('Payment::test');
    }

}