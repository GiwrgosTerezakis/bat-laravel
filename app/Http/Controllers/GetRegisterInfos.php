<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GetRegisterInfos extends Controller
{
    public function index(){
        return Http::post('https://server1-test.herokuapp.com/api/get-json-registrations')->json();
    }
}
