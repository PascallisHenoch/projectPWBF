<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posyandu;
use App\Models\Kecamatan;
use App\Models\Kelurahan;

class PosyanduController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posyandu = Posyandu::with('kelurahan')->get();
 
    	return view('posyandu/index', [
            'title' => 'Daftar posyandu',
            'posyandu' => $posyandu
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kecamatan = Kecamatan::all();
        $kelurahan = Kelurahan::all();

        return view('posyandu/tambah', [
            'title' => 'Tambah Posyandu',
            'kecamatan' => $kecamatan,
            'kelurahan' => $kelurahan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Posyandu::create([
            'nama_posyandu' => $request->nama_posyandu,
            'alamat_posyandu' => $request->alamat_posyandu,
            'id_kelurahan' => $request->id_kelurahan,
            'created_at' => date("Y-m-d H:i:s")
        ]);
        
        return redirect('/posyandu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posyandu = Posyandu::find($id);
        $kecamatan = Kecamatan::all();
        $kelurahan = Kelurahan::all();
        
        return view('posyandu/edit',[
            'title' => 'Edit Posyandu',
            'kecamatan' => $kecamatan,
            'kelurahan' => $kelurahan,
            'posyandu' => $posyandu
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Posyandu::where('id', $id)->update([
            'nama_posyandu' => $request->nama_posyandu,
            'alamat_posyandu' => $request->alamat_posyandu,
            'id_kelurahan' => $request->id_kelurahan,
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        
        return redirect('/posyandu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Posyandu::destroy($id);
		
        return redirect('/posyandu');
    }
}
