<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class MenuController extends Controller
{
    public function getData(){
        $data = DB::table('menu')->get();

        return view('menu', ['data' => $data]);
    }
}
