<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageController extends Controller{
    public function gohome(Request $request){
            return view('home');
    }

}