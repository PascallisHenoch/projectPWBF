<?php

namespace App\Http\Controllers;

use DB;
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
        $kelurahan = Kelurahan::all();
 
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
        DB::table('kelurahan_table')->insert([
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
        $kelurahan = DB::table('kelurahan_table')->where('id',$id)->get();
        
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
        DB::table('kelurahan_table')->where('id',$request->id)->update([
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
        DB::table('kelurahan_table')->where('id',$id)->delete();
		
        return redirect('/kelurahan');
    }
}
