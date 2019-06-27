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

    function daftaraslab(Request $req){
    
        $this->validate($req,[
            'motto' => 'required|min:30',
            'ipkimg' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'algo1img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'algo2img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'pbo1img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'pbo2img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'web1img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'web2img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $ipk = $req->input('ipk');
        $algo1 = $req->input('algo1');
        $algo2 = $req->input('algo2');
        $pbo1 = $req->input('pbo1');
        $pbo2 = $req->input('pbo2');
        $web1 = $req->input('web1');
        $web2 = $req->input('web2');
        $motivasi = $req->input('motivasi');
        $motto = $req->input('motto');



        $ipkimg = time().'.'.'ipk.'.$req->file('ipkimg')->getClientOriginalExtension();
        $req->file('ipkimg')->move(public_path('images/bukti'), $ipkimg);
        $algo1img = time().'.'.'algo1.'.$req->file('ipkimg')->getClientOriginalExtension();
        $req->file('algo1img')->move(public_path('images/bukti'), $algo1img);
        $algo2img = time().'.'.'algo2.'.$req->file('ipkimg')->getClientOriginalExtension();
        $req->file('algo2img')->move(public_path('images/bukti'), $algo2img);
        $pbo1img = time().'.'.'pbo1.'.$req->file('ipkimg')->getClientOriginalExtension();
        $req->file('pbo1img')->move(public_path('images/bukti'), $pbo1img);
        $pbo2img = time().'.'.'pbo2.'.$req->file('ipkimg')->getClientOriginalExtension();
        $req->file('pbo2img')->move(public_path('images/bukti'), $pbo2img);
        $web1img = time().'.'.'web1.'.$req->file('ipkimg')->getClientOriginalExtension();
        $req->file('web1img')->move(public_path('images/bukti'), $web1img);
        $web2img = time().'.'.'web2.'.$req->file('ipkimg')->getClientOriginalExtension();
        $req->file('web2img')->move(public_path('images/bukti'), $web2img);

        $data = array('ipk'=>$ipk,'nilai_algo1'=>$algo1,'nilai_algo2'=>$algo2,'nilai_pbo1'=>$pbo1,'nilai_pbo2'=>$pbo2,'nilai_perweb'=>$web1,'nilai_pemweb'=>$web2,'motivasi'=>$motivasi,'motto'=>$motto,'url_ipk'=>$ipk,'url_algo1'=>$algo1img,'url_algo2'=>$algo2img,'url_pbo1'=>$pbo1img,'url_pbo2'=>$pbo2img,'url_perweb'=>$web1img,'url_pemweb'=>$web2img);
        
        $a = Session::get('login')->id;
        DB::table('calon_aslab')->where('id',$a)->update($data);

        return redirect('/');
    }



    function logout(Request $request){
        $request->session()->forget('login');
        return redirect('/');
    }
}
