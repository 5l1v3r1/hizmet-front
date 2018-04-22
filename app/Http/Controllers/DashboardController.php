<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\DataTable;
use App\Helpers\Helper;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;

class DashboardController extends Controller
{
    public function show(){

        return view('pages.landing');
    }
    public function showHizmetal(){

        return view('pages.hizmet-al');
    }

}

