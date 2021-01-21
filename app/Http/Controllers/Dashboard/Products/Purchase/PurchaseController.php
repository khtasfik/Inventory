<?php

namespace App\Http\Controllers\Dashboard\Products\Purchase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Purchase;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchase = DB::table('purchases')
        ->select('purchases.*', 'suppliers.name')
        ->join('suppliers', 'purchases.supplier_id', '=', 'suppliers.id')
        ->get();
        return view('main.pages.products.purchase.purchase-lists', compact('purchase'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('main.pages.products.purchase.purchase-show');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'supplier_id' => 'required',
        //     'product_id' => 'required',
        //     'quentity' => 'required',
        //     'price' => 'required',
        //     'fquentity' => 'required',
        //     'total' => 'required',
        // ]);
            //    dd($request);

    foreach ($request->sname as $key => $value) {
        Purchase::create([
            'supplier_id'=> $request->sname,
            'product_id'=> $request->product[$key],
            'quentity'=> $request->quantity[$key],
            'price'=> $request->unit[$key],
            'date'=> $request->date,
            'free_quentity'=> $request->fquantity[$key],
            'total'=> $request->stotal[$key],
        ]);
    }

   
        return redirect('dashboard/purchase')->with('success', 'Product Purchase has been added successfully');
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
