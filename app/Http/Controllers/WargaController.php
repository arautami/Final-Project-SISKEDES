<?php

namespace App\Http\Controllers;

use App\Models\warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = warga::all();
        return view('datawarga', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah.tambahDataWarga');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        warga::create($request->all());
        return redirect()->route('indexWarga');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = warga::find($id);
        // dd($data);
        
        return view('edit.editDataWarga', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function edit(warga $warga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = warga::find($id);
        $data->update($request->all());

        return redirect()->route('indexWarga');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = warga::find($id);
        $data->delete();

        return redirect()->route('indexWarga');
    }
}
