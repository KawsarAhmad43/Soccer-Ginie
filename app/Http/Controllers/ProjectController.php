<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProjectController extends Controller
{
   public function getData(Request $request){
      //  $date="2021-08-01";
      $date=date('Y-m-d');
    // $response = Http::get("https://api.soccersapi.com/v2.2/fixtures/?user=kaleon299&token=51555bd1323cd1ff9c26e0ef3ce3d682&t=schedule&d=.$date.&league_id=1609");
      $response= Http::get("https://api.soccersapi.com/v2.2/livescores/?user=kaleon299&token=51555bd1323cd1ff9c26e0ef3ce3d682&t=today");
    //   return view("index")->with("data", $data);
    return view('index',['response'=>$response]);

   }




   public function about(Request $request){



      return view('about');




   }






}



