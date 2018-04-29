<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public static function sendMessage(Request $request){
        $messaheid=DB::table('messages')->insertGetId(
            [
                'from_id' => Auth::user()->id,
                'to_id' => $request->input("client_id"),
            ]
        );
        DB::table('message_content')->insert(
            [
                'm_id' => $messaheid,
                'content' => $request->input("message"),
            ]
        );
        return redirect()->back();
    }
}
