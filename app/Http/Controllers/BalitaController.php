<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posyandu;
use App\Models\Balita;

class BalitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $balita = Balita::all();
 
    	return view('balita/index', [
            'title' => 'Daftar Balita',
            'balita' => $balita
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posyandu = Posyandu::all();

        return view('balita/tambah', [
            'title' => 'Tambah Balita',
            'posyandu' => $posyandu
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
        Balita::create([
            'nama_balita' => $request->nama_balita,
            'nik_ortu' => $request->nik_ortu,
            'nama_ortu' => $request->nama_ortu,
            'tgllahir_balita' => $request->tgllahir_balita,
            'jk_balita' => $request->jk_balita,
            'status' => $request->status,
            'id_posyandu' => $request->id_posyandu,
            'created_at' => date("Y-m-d H:i:s")
        ]);
        
        return redirect('/balita');
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
        $posyandu = Posyandu::all();
        $balita = Balita::find($id);
        
        return view('balita/edit',[
            'title' => 'Edit Balita',
            'posyandu' => $posyandu,
            'balita' => $balita
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
        Balita::where('id', $id)->update([
            'nama_balita' => $request->nama_balita,
            'nik_ortu' => $request->nik_ortu,
            'nama_ortu' => $request->nama_ortu,
            'tgllahir_balita' => $request->tgllahir_balita,
            'jk_balita' => $request->jk_balita,
            'status' => $request->status,
            'id_posyandu' => $request->id_posyandu,
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        
        return redirect('/balita');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Balita::destroy($id);
		
        return redirect('/balita');
    }
}
