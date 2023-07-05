<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MainController extends Controller
{
    public function main(){
        $datas = Produk::all();
        return view('data',compact('datas'));
    }

    public function update(Request $request){

        $password = md5($request->password);

        $url = "https://recruitment.fastprint.co.id/tes/api_tes_programmer";

        $user = [
            'username' => $request->username,
            'password' => $password
        ];
        
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $user);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        
        $response = curl_exec($curl);
        curl_close($curl);
        $datas = json_decode($response,true);
        // dd($datas);
        if($datas['error'] == 0){
            $this->deleteAllData();
            $this->storeData($datas['data']);
            return redirect('/');
        }else{
            return abort(404);
        }
    }

    public function deleteAllData() {
        Produk::truncate();
    }
    public function storeData($datas){
        foreach ($datas as $data){
            $produk = new Produk();
            $produk->id_produk = $data['id_produk'];
            $produk->nama_produk = $data['nama_produk'];
            $produk->kategori = $data['kategori'];
            $produk->harga = $data['harga'];
            $produk->status = $data['status'];
            $produk->save();
        }
    }

    public function availProd(){
        $datas = Produk::all()->where('status','bisa dijual');
        return view('avail',compact('datas'));
    }

    public function add(Request $request) {
        $produk = new Produk();
        $produk->id_produk = $request->id;
        $produk->nama_produk = $request->name;
        $produk->harga = $request->price;
        $produk->kategori = $request->category;
        $produk->status = $request->status;
        $produk->save();
        return redirect('/');
    }

    public function edit($id) {
        $datas = Produk::find($id);
        // dd($datas->id);
        return view('edit',compact('datas'));
    }

    public function store(Request $request, $id){
        $produk = Produk::find($id);
        $produk->nama_produk = $request->name;
        $produk->harga = $request->price;
        $produk->kategori = $request->category;
        $produk->status = $request->status;
        $produk->update();
        return redirect('/');    
    }

    public function isDelete($id){
        $data = Produk::find($id);
        return view('delete',compact('data'));
    }

    public function delete($id){
        Produk::find($id)->delete();
        return redirect('/');
    }

}
