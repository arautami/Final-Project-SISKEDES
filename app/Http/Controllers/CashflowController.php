<?php

namespace App\Http\Controllers;

use App\Models\cashflow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CashflowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = cashflow::all();
        return view('cashflow', compact('data')); 
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah.tambahCashflow');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        cashflow::create($request->all());
        return redirect()->route('indexCashflow');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cashflow  $cashflow
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = cashflow::find($id);
        // dd($data);
        
        return view('edit.editCashflow', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cashflow  $cashflow
     * @return \Illuminate\Http\Response
     */
    public function edit(cashflow $cashflow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cashflow  $cashflow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = cashflow::find($id);
        $data->update($request->all());

        return redirect()->route('indexCashflow');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cashflow  $cashflow
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = cashflow::find($id);
        $data->delete();

        return redirect()->route('indexCashflow');
    }

    public function laporan(Request $request)
    {
        $fromDate = $request->input('firstDate');
        $toDate = $request->input('lastDate');
        
        $query = DB::table('cashflows')->select()
            ->where('date', '>=', $fromDate)
            ->where('date', '<=', $toDate)
            ->get();
        // dd($query);

        return view('printLaporan', compact('query', 'fromDate', 'toDate'));
    }
}
