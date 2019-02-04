<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WelcomeController extends Controller
{
    public function view()
    {
        // $opts = ['http' => ['method' => 'GET', 'header' => ['User-Agent: PHP']]];
     //    $context = stream_context_create($opts);
     //    $json = file_get_contents("https://api.github.com/repos/atel0/AAEmu/commits", false, $context);
     //    $obj = json_decode($json, true);
     //    $obj=array_slice($obj,0,3);
        $users=DB::connection('mysql')->table('users')->count();
        return view('pages.home', ['users' => $users]);
    }
}

