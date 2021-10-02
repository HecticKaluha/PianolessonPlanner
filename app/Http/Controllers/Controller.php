<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function checkBrowser(Request $request){
        $browsers = ["Chrome", "Firefox", "Safari", "Opera", "MSIE", "Trident", "Edge"];
        $ie = ["MSIE", "Trident", "Edge"];
        $currentBrowser = false;
        $userAgent = $request->header('User-Agent');
        foreach($browsers as $index => $browser){
            if(strpos($userAgent, $browser)){
                $currentBrowser = $browsers[$index];
                break;
            }
        }

        if(in_array($currentBrowser, $ie)){
            $currentBrowser = "Internet Explorer, Edge or Trident";
        }
        return $currentBrowser;
    }
}
