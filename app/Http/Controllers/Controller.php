<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use Session;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function test() {
        // mengambil data dari table pegawai
    	$pegawai = DB::select("SELECT * FROM bumdesa.users");
 
    	// mengirim data pegawai ke view index
        // print_r($pegawai);
        foreach ($pegawai as $key) {
            echo $key->username;
        }
        // return response()->json($pegawai);
    	// return view('index',['pegawai' => $pegawai]);
    }
    function login(Request $request){
        $username = $request->username;
        $pass = $request->pass;

        $query = "SELECT * FROM bumdesa.users WHERE username = '$username' AND password = '$pass'";
        $get = DB::select($query);
        if ($get) {
            foreach ($get as $key) {
                $request->session()->put('login', TRUE);
                $request->session()->put('username', $key->username);
                $request->session()->put('nama', $key->name);
                $request->session()->put('level', $key->level);

                if($key->level == "1"){
                    return response()->json(['auth' => true, 'type' => '1']);
                }else{
                    return response()->json(['auth' => true]);
                }
            }
        }else{
            return response()->json(['auth' => false, 'error' => "user password tidak sesuai"]);
        }
    }

    function logout(){
        Session::forget('key');
        Session::flush();
        
        return redirect('login');
    }
}

