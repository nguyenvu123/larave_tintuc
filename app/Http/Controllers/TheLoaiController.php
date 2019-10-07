<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TheLoai;

class TheLoaiController extends Controller
{
    //
    public function getDanhsach() {
    	$theloais = TheLoai::all();
    	return view('admin.theloai.danhsach',['theloais'=> $theloais]);
    }
    public function add() {
    	
    	return view('admin.theloai.them');
    }
    public function addPost (Request $request) {
    	// $this->validate($request, [
     //        'title' => 'required',
     //        'body' => 'required'

     //     ]);
    	$slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->input('cateName'))));
        $theloai =  new TheLoai;
        $theloai->Ten =  $request->input('cateName');
        $theloai->TenKhongDau = $slug;
     
        $theloai->save();
        return redirect('/admin/theloai/danhsach');
    	
    }
    

}
