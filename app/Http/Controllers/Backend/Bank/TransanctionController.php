<?php

namespace App\Http\Controllers\Backend\Bank;

use App\Http\Controllers\Controller;
use App\Models\Bank\BankAccounts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransanctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
   { 
    $bankaccounts = BankAccounts::with('bank')->get();
    $tran_id = 'TRN'.Auth::id().mt_rand(100000, 999999);
        return view('bank.transaction.create-transaction',[ 'bankaccounts'=> $bankaccounts, 'tran_id' => $tran_id]);
    }


    public function get_balance(Request $request)
   { 
    $id = $request->id;
    $bankaccount = BankAccounts::where('id', '=', $id )->first();
    if($bankaccount){
        $balance = $bankaccount->balance;
    }else{
        $balance = 0;
    }
    
    return response()->json($balance);
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
