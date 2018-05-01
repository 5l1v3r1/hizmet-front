<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function show(){
        $message_data = DB::table('messages')
            ->select('messages.*','clients.name as name','clients.logo as logo')
            ->join('clients','clients.id','messages.from_id')
            ->where('to_id', Auth::user()->id)
            ->orwhere('from_id', Auth::user()->id)
            ->get();


        return view('pages.messenger', ['message_data' => $message_data]);

    }
    public function getMessage(Request $request){
        $data= $request->input('data');
        $message_detail = DB::table('messages')
            ->select('messages.*','message_content.*','clients.name as name')
            ->join('message_content','message_content.m_id','messages.id')
            ->join('clients','clients.id','messages.to_id')
            ->where('messages.id', $data)
            ->get();
        print_r(json_encode($message_detail)) ;
    }
    public function sendMessage(Request $request)
    {


        if($request->input('data')){
            $data = json_decode($request->input('data'));
            DB::table('message_content')->insert(
                [
                    'm_id' => $data->message_id,
                    'created_by' => $data->client_id,
                    'content' => $data->message,

                ]
            );
            return $data->message_id;


        }else{
            $messaheid=DB::table('messages')->insertGetId(
                [
                    'from_id' => Auth::user()->id,
                    'to_id' => $request->input("client_id_2"),
                ]
            );
            DB::table('message_content')->insert(
                [
                    'm_id' => $messaheid,
                    'created_by' => Auth::user()->id,
                    'content' => $request->input("message_2"),

                ]
            );
            return redirect()->back();
        }
    }

}
