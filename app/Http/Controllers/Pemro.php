<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
class Pemro extends Controller
{
    function daftar(Request $req)
    {
    	$this->validate($req,[
    		'namalengkap' => 'required|min:3|max:50',
    		'nim' => 'required|bail|numeric',
    		'email' => 'required|email',
    		'ttl' => 'required',
    		'tempatlahir' => 'required|min:4',
    		'password' => 'min:8|required_with:konfirmpassword|same:konfirmpassword',
    		'konfirmpassword' => 'min:8',
    		'alamat' => 'required|min:8',
    		'hp' => 'required|min:11'
    	]);

    	$namalengkap = $req->input('namalengkap');
    	$nim = $req->input('nim');
    	$email = $req->input('email');
    	$ttl = $req->input('ttl');
    	$password = $req->input('password');
    	$tempatlahir = $req->input('tempatlahir');
    	$alamat = $req->input('alamat');
    	$hp = $req->input('hp');

    	$data = array('nama_lengkap'=>$namalengkap,'nim'=>$nim,'tempat_lahir'=>$tempatlahir,'email'=>$email,'tanggal_lahir'=>$ttl,'alamat'=>$alamat,'password'=>$password,'hp'=>$hp);

    	DB::table('calon_aslab')->insert($data);
    	$req->session()->flash('daftar','Berhasil Daftar');
    	return redirect('/');
    }
    function login(Request $req){
        $this->validate($req,[
            'email'=> 'required|email',
            'password' => 'required'
        ]);

        $email = $req->input('email');
        $password = $req->input('password');

        $data = DB::table('calon_aslab')->where('email',$email)->where('password',$password)->first();
        if($data){
            $req->session()->put('login', $data);
        }
        return redirect('/');
    }
}
