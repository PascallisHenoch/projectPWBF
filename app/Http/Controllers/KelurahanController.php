<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\kelurahan;

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
        return view('kelurahan/tambah', [
            'title' => 'Tambah kelurahan'
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
        $kelurahan = DB::table('kelurahan_table')->where('id',$id)->get();
        
        return view('kelurahan/edit',[
            'title' => 'Edit Kelurahan',
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
