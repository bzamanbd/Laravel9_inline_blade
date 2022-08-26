<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class MemberController extends Controller
{
    function showData(){
        $totalMember = 200;
        return Blade::render('<center><h1>{{$total}} is total member</h1></center>', ['total'=>$totalMember]);
    }
}