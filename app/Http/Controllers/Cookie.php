<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Cookie extends Controller
{
    public function setCookieAccurary(Request $request){
      $string = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
      $random = substr(str_shuffle($string), 0, 6);

      $minutes = 0.5;
      $response = new Response();
      $response->withCookie(cookie('Accurary', $random, $minutes));
      return $response;
    }   

    public function getCookieAccurary(Request $request){ 
      $value = $request->cookie('Accurary');
      return $value;
    }
}
