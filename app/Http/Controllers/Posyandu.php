<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Posyandu;

class PosyanduController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posyandu = Posyandu::all();
 
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
        return view('posyandu/tambah', [
            'title' => 'Tambah Posyandu'
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
        DB::table('posyandu_table')->insert([
            'nama_posyandu' => $request->nama_posyandu,
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
        $posyandu = DB::table('posyandu_table')->where('id',$id)->get();
        
        return view('posyandu/edit',[
            'title' => 'Edit Posyandu',
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
        DB::table('posyandu_table')->where('id',$request->id)->update([
            'nama_posyandu' => $request->nama_posyandu,
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
        DB::table('posyandu_table')->where('id',$id)->delete();
		
        return redirect('/posyandu');
    }
}
