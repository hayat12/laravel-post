<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelperController extends Controller
{
    public function notFoundHttpResponse($message){
        return $arrayName = array('success' =>false, 'message'=>$message);
    }
}
