<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class RegisterController extends Controller
{

    public function create()
    {
        return view('register.create');
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // $user = User::create(request(['name', 'email', 'password']));
        /*if ($request->input("type") == 1) {
        $operation = [62];
    } elseif ($request->input("type") == 2) {
        $operation = [63];
    }*/

        $client_id = DB::table('clients')->insertGetId(
            [
                'name' => $request->input("name"),
                'email' => $request->input("email"),
                'type' => $request->input("type"),
                'password' => bcrypt($request->input("password")),


            ]
        );
        DB::table('client_social')->insert(
            [
                'c_id' => $client_id,

            ]
        );


        return redirect()->to('/home');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->to('/login');
    }

    public function createClient(Request $request)
    {
        /*   $this->validate(request(), [
               'name' => 'required',
               'eposta' => 'required|email',
               'password' => 'required'
           ]);*/

        if (empty($request->input("client_id"))) {
            $last_insert_id = DB::table('clients')->insertGetId(
                [
                    'name' => $request->input("name"),
                    'email' => $request->input("eposta"),
                    'type' => 1,
                    'password' => bcrypt($request->input("password")),
                    'district' => $request->input("ilce"),
                    'location' => $request->input("adres"),
                    'phone' => $request->input("telefonNumarasi"),
                ]
            );
        } else {
            $last_insert_id = $request->input("client_id");
        }
        if ($request->input("ot_hizmet_tarihi")) {
            $booking_date = date('Y-m-d', strtotime($request->input("ot_hizmet_tarihi") . " 00:00:00"));
        } else {
            $booking_date = date('Y-m-d', strtotime($request->input("et_hizmet_tarihi") . " 00:00:00"));
        }


        DB::table('booking')->insertGetId(
            [
                'booking_title' => $request->input("booking_name"),
                'room_number' => $request->input("ot_oda_sayisi"),
                'service_id' => $request->input("service_id"),
                'booking_date' => $booking_date,
                'detail' => $request->input("aciklama"),
                'service_start' => $request->input("ot_hizmet_baslagic_saati"),
                'service_finish' => $request->input("ot_hizmet_bitis_saati"),
                'location' => $request->input("ot_yer"),
                'm2' => $request->input("metrekare"),
                'client_id' => $last_insert_id,


            ]
        );


        return redirect()->to('/home');
    }

    public function createSeller(Request $request)
    {
        /*   $this->validate(request(), [
               'name' => 'required',
               'eposta' => 'required|email',
               'password' => 'required'
           ]);*/
        $services = "[";
        foreach ($request->input("hizmetler") as $item) {
            $services .= $item . ",";

        }
        $services .= "]";
        $last_insert_id = DB::table('clients')->insertGetId(
            [
                'name' => $request->input("adsoyad"),
                'birthday' => $request->input("dogumtarihi"),
                'email' => $request->input("eposta"),
                'type' => 2,
                'password' => bcrypt($request->input("sifre")),
                'province' => $request->input("sehir"),
                'phone' => $request->input("telefonnumarasi"),
                'services' => $services,
            ]
        );

        return redirect()->to('/home');
    }

    public function createNews(Request $request)
    {
        $this->validate(request(), [
            'email' => 'required|email|unique:news',
        ]);


        $last_insert_id = DB::table('news')->insertGetId(
            [
                'email' => $request->input("email"),

            ]
        );

        return redirect()->back();
    }

    public function profile()
    {
        $profile_data = DB::table('clients')
            ->where('id', Auth::user()->id)
            ->where('status', '<>', 0)
            ->first();
        $social_data = DB::table('client_social')
            ->where('c_id', Auth::user()->id)
            ->first();

        return view('pages.client.profile', ['profile_data' => $profile_data, 'social_data' => $social_data]);
    }

    public function showTeklifler()
    {
        $offer_data = DB::table('booking_offers')
            ->select('booking.*', 'clients.name as cname', 'services.s_name as sname', 'clients.province as bas_il', 'clients.district as bas_ilce', 'booking_offers.note as note', 'clients.name as bas_name', 'booking_offers.offer_date as offer_date', 'booking_offers.id as bid', 'booking_offers.status as status', 'booking_offers.prices as prices', 'clients.id as cid')
            ->Join('booking', 'booking.id', 'booking_offers.booking_id')
            ->Join('clients', 'clients.id', 'booking_offers.assigned_id')
            ->Join('services', 'services.id', 'booking.service_id')
            ->where('booking_offers.client_id', Auth::user()->id)
            ->where('booking_offers.status', '<>', 0)
            ->whereIn('booking_offers.status', [1, 2])
            ->get();
        return view('pages.client.teklifler', ['offer_data' => $offer_data]);
    }

    public function showVerilenTeklifler()
    {
        $offer_data = DB::table('booking_offers')
            ->select('booking.*', 'clients.name as cname', 'services.s_name as sname', 'clients.province as bas_il', 'clients.district as bas_ilce', 'booking_offers.note as note', 'clients.name as bas_name', 'booking_offers.offer_date as offer_date', 'booking_offers.id as bid', 'booking_offers.status as status', 'booking_offers.prices as prices')
            ->Join('booking', 'booking.id', 'booking_offers.booking_id')
            ->Join('clients', 'clients.id', 'booking_offers.assigned_id')
            ->Join('services', 'services.id', 'booking.service_id')
            ->where('booking_offers.assigned_id', Auth::user()->id)
            ->where('booking_offers.status', 1)
            ->get();
        return view('pages.seller.verilen_teklifler', ['offer_data' => $offer_data]);
    }

    public function showOnaylananTeklifler()
    {
        $offer_data = DB::table('booking_offers')
            ->select('booking.*', 'clients.name as cname', 'services.s_name as sname', 'clients.province as bas_il', 'clients.district as bas_ilce', 'booking_offers.note as note', 'clients.name as bas_name', 'booking_offers.offer_date as offer_date', 'booking_offers.id as bid', 'booking_offers.status as status', 'booking_offers.prices as prices')
            ->Join('booking', 'booking.id', 'booking_offers.booking_id')
            ->Join('clients', 'clients.id', 'booking_offers.assigned_id')
            ->Join('services', 'services.id', 'booking.service_id')
            ->where('booking_offers.assigned_id', Auth::user()->id)
            ->where('booking_offers.status', 2)
            ->get();
        return view('pages.seller.onaylanan_teklifler', ['offer_data' => $offer_data]);
    }

    public function showTamamlananTeklifler()
    {
        $offer_data = DB::table('booking_offers')
            ->select('booking.*', 'clients.name as cname', 'services.s_name as sname', 'clients.province as bas_il', 'clients.district as bas_ilce', 'booking_offers.note as note', 'clients.name as bas_name', 'booking_offers.offer_date as offer_date', 'booking_offers.id as bid', 'booking_offers.status as status', 'booking_offers.prices as prices', 'clients.id as cid')
            ->Join('booking', 'booking.id', 'booking_offers.booking_id')
            ->Join('clients', 'clients.id', 'booking_offers.assigned_id')
            ->Join('services', 'services.id', 'booking.service_id')
            ->where('booking_offers.assigned_id', Auth::user()->id)
            ->where('booking_offers.status', 5)
            ->get();
        return view('pages.seller.tamamlanan_teklifler', ['offer_data' => $offer_data]);
    }

    public function changePasswordshow()
    {
        return view('pages.client.change_password');
    }

    public function changePassword(Request $request)
    {


        if ($request->input("new_current_password") == $request->input("repeat_new_current_password")) {
            DB::table('clients')
                ->where('id', $request->input("client_id"))
                ->where('status', '<>', 0)
                ->update(
                    [
                        'password' => bcrypt($request->input("new_current_password")),

                    ]
                );
        } else {
            return "Girdiğiniz şifreler Eşleşmiyor";
        }


        return redirect()->back();

    }

    public function changeProfile(Request $request)
    {

        DB::table('clients')
            ->where('id', $request->input("client_id"))
            ->where('status', '<>', 0)
            ->update(
                [
                    'name' => $request->input("name"),
                    'province' => $request->input("il"),
                    'district' => $request->input("ilce"),
                    'location' => $request->input("adres"),
                    'phone' => $request->input("telefon"),
                    'birthday' => $request->input("birthday"),
                    'about_us' => $request->input("about"),
                ]
            );
        DB::table('client_social')
            ->where('c_id', $request->input("client_id"))
            ->update(
                [
                    'facebook' => $request->input("facebook"),
                    'twitter' => $request->input("twitter"),
                ]
            );

        return redirect()->back();
    }

    public function onay(Request $request, $id = 0)
    {


        DB::table('booking_offers')
            ->where('id', $id)
            ->update(
                [
                    'status' => 2,

                ]
            );
        $bo = DB::table("booking_offers")
            ->where('id', $id)
            ->first();
        DB::table('booking')
            ->where('id', $bo->booking_id)
            ->update(
                [
                    'assigned_id' => Auth::user()->id,
                    'status' => 2,

                ]
            );


        return redirect()->back();
    }

    public function istamamla(Request $request, $id = 0)
    {


        DB::table('booking_offers')
            ->where('id', $id)
            ->update(
                [
                    'status' => 5,

                ]
            );
        $bo = DB::table("booking_offers")
            ->where('id', $id)
            ->first();
        DB::table('booking')
            ->where('id', $bo->booking_id)
            ->update(
                [
                    'assigned_id' => Auth::user()->id,
                    'status' => 5,

                ]
            );


        return redirect()->to('/satici-profil/' . $bo->assigned_id);
    }

    public function kotu(Request $request, $id = 0)
    {


        DB::table('booking_offers')
            ->where('id', $id)
            ->update(
                [
                    'status' => 3,

                ]
            );
        $bo = DB::table("booking_offers")
            ->where('id', $id)
            ->first();
        DB::table('booking')
            ->where('id', $bo->booking_id)
            ->update(
                [
                    'assigned_id' => Auth::user()->id,
                    'status' => 3,

                ]
            );


        return redirect()->back();
    }

    public function red(Request $request, $id = 0)
    {

        DB::table('booking_offers')
            ->where('id', $id)
            ->update(
                [
                    'status' => 3,

                ]
            );
        $bo = DB::table("booking_offers")
            ->where('id', $id)
            ->first();
        DB::table('booking')
            ->where('id', $bo->booking_id)
            ->update(
                [
                    'assigned_id' => 0,
                    'status' => 1,

                ]
            );

        return redirect()->back();
    }

    public function geri(Request $request, $id = 0)
    {

        DB::table('booking_offers')
            ->where('id', $id)
            ->update(
                [
                    'status' => 1,

                ]
            );
        $bo = DB::table("booking_offers")
            ->where('id', $id)
            ->first();
        DB::table('booking')
            ->where('id', $bo->booking_id)
            ->update(
                [
                    'assigned_id' => 0,
                    'status' => 1,

                ]
            );

        return redirect()->back();
    }

    public function tamamla(Request $request, $id = 0)
    {

        DB::table('booking_offers')
            ->where('id', $id)
            ->update(
                [
                    'status' => 4,

                ]
            );

        return redirect()->back();
    }

    public function clientProfile($id = 0)
    {
        $profile_data = DB::table('clients')
            ->where('id', $id)
            ->where('status', '<>', 0)
            ->first();
        $rate = DB::table('comment')
            ->where('c_id', $id)
            ->avg('point');
        $comment_data = DB::table('comment')
            ->select('comment.*', 'clients.name as name')
            ->join('clients', 'clients.id', 'comment.created_by')
            ->where('c_id', $id)
            ->get();

        return view('pages.client.show_profile', ['profile_data' => $profile_data, 'rate' => $rate, 'comment_data' => json_encode($comment_data),]);
    }

    public function sellerProfile($id = 0)
    {
        $profile_data = DB::table('clients')
            ->where('id', $id)
            ->where('status', '<>', 0)
            ->first();
        $rate = DB::table('comment')
            ->where('c_id', $id)
            ->avg('point');
        $comment_data = DB::table('comment')
            ->select('comment.*', 'clients.name as name')
            ->join('clients', 'clients.id', 'comment.created_by')
            ->where('c_id', $id)
            ->get();
        $favorites=DB::table('client_favorites')
            ->where('seller_id', $id)
            ->where('client_id', Auth::user()->id)
            ->first();
        return view('pages.seller.show_profile', ['profile_data' => $profile_data, 'rate' => $rate, 'favorites' => $favorites ,'comment_data' => json_encode($comment_data),]);
    }

    public function clientYorumYaz(Request $request)
    {
        DB::table('comment')->insert(
            [
                'c_id' => $request->input("client_id"),
                'head' => $request->input("subject"),
                'comment' => $request->input("review"),
                'point' => $request->input("rating"),
                'created_by' => Auth::user()->id,

            ]
        );

        return redirect()->back();
    }

    public function favori(Request $request){

        $favorite_data = DB::table('client_favorites')
            ->join('clients', 'clients.id', 'client_favorites.seller_id')
            ->where('client_favorites.client_id', Auth::user()->id)
            ->get();


        return view('pages.client.favoriler', ['favorite_data' => $favorite_data]);
    }
    public function favoriEkle($id=0){
        DB::table('client_favorites')->insert(
            [
                'client_id' => Auth::user()->id,
                'seller_id' => $id,

            ]
        );
        return redirect()->back();
    }
    public function favoriSil($id=0){

        DB::table('client_favorites')
            ->where('seller_id', $id)
            ->where('client_id', Auth::user()->id)
            ->delete();
        return redirect()->back();
    }
}
