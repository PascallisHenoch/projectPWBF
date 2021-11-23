<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History_Posyandu;
use App\Models\Balita;

class History_PosyanduController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $history_posyandu = History_Posyandu::with('balita')->get();
 
    	return view('history_posyandu/index', [
            'title' => 'Daftar History Posyandu',
            'history_posyandu' => $history_posyandu
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $balita = Balita::all();

        return view('history_posyandu/tambah', [
            'title' => 'Tambah History Posyandu',
            'balita' => $balita
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
        History_Posyandu::create([
            'tgl_posyandu' => $request->tgl_posyandu,
            'berat_badan_balita' => $request->berat_badan_balita,
            'tinggi_badan_balita' => $request->tinggi_badan_balita,
            'id_history_posyandu' => $request->id_history_posyandu,
            'created_at' => date("Y-m-d H:i:s")
        ]);
        
        return redirect('/history_posyandu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $history = History_Posyandu::with('balita')->whereHas('Balita', function($q) use($id) {
            $q->where('nik_ortu', $id);
        })->get();
        $data = array();
        foreach($history as $k => $v) {
            $data[$k] = array(
                $k + 1,
                $v->balita->nama_balita,
                date("d-m-Y", strtotime($v->tgl_posyandu)),
                $v->berat_badan_balita,
                $v->tinggi_badan_balita
            );
        }

        $output = array(
            "data" => $data
        );

        echo json_encode($output);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $balita = Balita::all();
        $history_posyandu = History_Posyandu::find($id);
        
        return view('history_posyandu/edit',[
            'title' => 'Edit History Posyandu',
            'balita' => $balita,
            'history_posyandu' => $history_posyandu
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
        History_Posyandu::where('id', $id)->update([
            'tgl_posyandu' => $request->tgl_posyandu,
            'berat_badan_balita' => $request->berat_badan_balita,
            'tinggi_badan_balita' => $request->tinggi_badan_balita,
            'id_history_posyandu' => $request->id_history_posyandu,
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        
        return redirect('/history_posyandu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        History_Posyandu::destroy($id);
		
        return redirect('/history_posyandu');
    }
}
