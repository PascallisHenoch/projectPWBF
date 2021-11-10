<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelurahan;
use App\Models\Kecamatan;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelurahan = Kelurahan::with('kecamatan')->get();
 
    	return view('kelurahan/index', [
            'title' => 'Daftar Kelurahan',
            'kelurahan' => $kelurahan
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

        return view('kelurahan/tambah', [
            'title' => 'Tambah Kelurahan',
            'kecamatan' => $kecamatan
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
        Kelurahan::create([
            'id_kelurahan' => $request->id_kelurahan,
            'nama_kelurahan' => $request->nama_kelurahan,
            'created_at' => date("Y-m-d H:i:s")
        ]);
        
        return redirect('/kelurahan');
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
        $kecamatan = Kecamatan::all();
        $kelurahan = Kelurahan::find($id);
        
        return view('kelurahan/edit',[
            'title' => 'Edit Kelurahan',
            'kecamatan' => $kecamatan,
            'kelurahan' => $kelurahan
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
        Kelurahan::where('id', $id)->update([
            'id_kelurahan' => $request->id_kelurahan,
            'nama_kelurahan' => $request->nama_kelurahan,
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        
        return redirect('/kelurahan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kelurahan::destroy($id);
		
        return redirect('/kelurahan');
    }
}
