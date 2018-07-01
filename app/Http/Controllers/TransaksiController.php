<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\User;
use App\Pelanggan;
use App\Service;
use App\Paket;
use App\Therapist;
use App\Ruangan;

class TransaksiController extends Controller
{
     public function index()
    {
    	$transaksis = Transaksi::all();
    	return view('transaksi.index',compact('transaksis'));
    }

    public function create()
    {
    	$user = Pelanggan::all();
        $pelanggan = [];
        foreach ($user as $key) {
            $pelanggan[$key->id] = $key->user->name;
        }
        $pr = Service::all();
        $pa = Paket::all();
        $service = [];
        foreach ($pa as $key) {
            $service[$key->id] = 'Paket -'.$key->nama_paket;
        }

        foreach ($pr as $key) {
            $service[$key->id] = $key->nama_services;
        }

        $ruangan = Ruangan::pluck('nama_ruang','id');
        $terapis = Therapist::pluck('nama','id');

    	return view('transaksi.create',compact('pelanggan','service','ruangan','terapis'));
    }

    public function store(Request $request)
    {
    	$transaksi = new Transaksi();
    	$transaksi->user_id = $request->user_id;
    	$transaksi->kategori = $request->kategori;
    	$transaksi->diskon = $request->diskon;
    	$transaksi->service = $request->service;
    	$transaksi->therapist = $request->therapist;
    	$transaksi->ruangan = $request->ruangan;
    	$transaksi->total = $request->total;
    	$transaksi->save();

    	return redirect(route('transaksi.index'));
    }
}
