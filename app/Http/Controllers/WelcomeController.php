<?php

namespace App\Http\Controllers;

use App\Models\Welcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('xxx');
        $jumlahGuru = DB::table('tbl_guru')->count(); //jumlah data
        $jumlahFasilitas = DB::table('tbl_fasilitas')->count(); //jumlah data
        $jumlahPengunjung = DB::table('tbl_pengunjung')->count(); //jumlah data
        $jumlahPengunjung = DB::table("tbl_artikel")->where("category",  "Prestasi")->count();//jumlah data

        return view ('/welcome', compact("jumlahGuru", "jumlahFasilitas", "jumlahPengunjung"));  //passing parameter 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Welcome $welcome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Welcome $welcome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Welcome $welcome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Welcome $welcome)
    {
        //
    }
}
