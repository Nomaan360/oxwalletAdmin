<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\privacy_policy;
use App\Models\disclosure;
use App\Models\terms_of_service;
use App\Models\faq;
use function App\Helpers\is_mobile;

class Apicontroller extends Controller
{
    //
    function get_privacy_policy(){
        $policy= privacy_policy::get();
        $res['data']=$policy;

        return is_mobile("API",null,$res);
    }
    function get_disclosure(){
        $policy= disclosure::get();
        $res['data']=$policy;

        return is_mobile("API",null,$res);
    }
    function term_of_service(){
        $policy= terms_of_service::get();
        $res['data']=$policy;

        return is_mobile("API",null,$res);
    }
    function faq(){
        $policy= faq::get();
        $res['data']=$policy;

        return is_mobile("API",null,$res);
    }
}
