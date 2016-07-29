<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GetController extends Controller
{
    public function index(){
        return 'index';
    }
    public function show($id){
        return 'This is show id = '.$id;
    }
    public function update($id){
        return 'This is update id = '.$id;
    }
    public function destroy($id){
        return 'This is destroy id = '.$id;
    }
}
