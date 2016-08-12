<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    public function index(){
        return view('test.test');
    }
    public function test(Request $request){
        return $request->age;
    }
    public function testajax(Request $request){
        return view('test.testajax');
    }
    public function savetest(Request $request){
        $test = new Test();
        $test->content=$request->content;
        if($test->save())
            return 1;
        else
            return 0;
    }
    public function mastertest123(){
        return "213";
    }
}
