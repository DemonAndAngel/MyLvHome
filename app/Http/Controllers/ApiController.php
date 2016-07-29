<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ApiController extends Controller
{
    private $statusCode=200;
    public function setStatusCode($code){
        $this->statusCode=$code;
        return $this;
    }
    public function getStatusCode(){
        return  $this->statusCode;
    }

    public function responseNotFound($message="Not Found"){
        return $this->responseError($message);
    }
    private function responseError($message){
        return $this->response([
            'status'=>'failed',
            'error'=>[
                'code'=>$this->getStatusCode(),
                'message'=>$message
            ],
        ]);
    }
    public function response($data){
        return \Response::json($data);
    }
}
