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
    public function showHizmetver(){

        return view('pages.hizmet-ver');
    } public function showHome(){

    $ads_data = DB::table('booking')
        ->select('*','clients.name as cname', 'booking.id as bid','booking.district as ilce', 'booking.province as il')
        ->Join('services','services.id','booking.service_id')
        ->Join('clients','clients.id','booking.client_id')
        ->where('booking.status', '<>', 0)
        ->where('booking.visibled', 0)
        ->orderBy('booking.id','DESC')
        ->get();
        return view('pages.home', ['ads_data' => $ads_data]);
    }
    public function create(Request $request){

        return view('pages.home');
    }

}

