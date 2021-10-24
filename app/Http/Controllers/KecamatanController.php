<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Kecamatan;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kecamatan = Kecamatan::all();
 
    	return view('kecamatan/index', [
            'title' => 'Daftar Kecamatan',
            'kecamatan' => $kecamatan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kecamatan/tambah', [
            'title' => 'Tambah Kecamatan'
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
        DB::table('kecamatan_table')->insert([
            'nama_kecamatan' => $request->nama_kecamatan,
            'created_at' => date("Y-m-d H:i:s")
        ]);
        
        return redirect('/kecamatan');
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
        $kecamatan = DB::table('kecamatan_table')->where('id',$id)->get();
        
        return view('kecamatan/edit',[
            'title' => 'Edit Kecamatan',
            'kecamatan' => $kecamatan
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
        DB::table('kecamatan_table')->where('id',$request->id)->update([
            'nama_kecamatan' => $request->nama_kecamatan,
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        
        return redirect('/kecamatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('kecamatan_table')->where('id',$id)->delete();
		
        return redirect('/kecamatan');
    }
}
