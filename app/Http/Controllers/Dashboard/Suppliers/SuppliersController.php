<?php

namespace App\Http\Controllers\Dashboard\Suppliers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Suppliers;
use App\Models\User;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = DB::table('suppliers')
        ->select('suppliers.*')
        ->get();
        $supplierSum = count($suppliers);
        return view('main.pages.suppliers.supplier-list', compact('suppliers', 'supplierSum'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $supplierType = DB::table('Suppliers_type')
        ->select('Suppliers_type.*')
        ->get();
        return view('main.pages.suppliers.supplier-show', compact('supplierType'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'company' => 'required',
            'file' => 'required',
            'type' => 'required',
            'gender' => 'required',
        ]);


        $suppliers = new Suppliers([
            'email' => $request->get('email'),
            'name' => $request->get('name'),
            'contact' => $request->get('contact'),
            'company' => $request->get('company'),
            'supplier_type_id' => $request->get('type'),
            'gender' => $request->get('gender'),
        ]);

        if (request()->hasFile('file')) {

            $file = request()->file('file')->getClientOriginalName();
            request()->file('file')->storeAs('public/Suppliers' . '/' . $file, '');
            // $users->update(['file' => $file]);
            $suppliers->file = $file;
        }
        // dd($request);
        $suppliers->save();
        return redirect('dashboard/supplier')->with('success', 'User has been added successfully');
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
    public function edit(Suppliers $suppliers)
    {
        $suppliers = DB::table('suppliers')
                ->select('suppliers.*', 'suppliers_type.name', 'suppliers.name as sname')
                ->join('suppliers_type', 'suppliers.supplier_type_id', '=', 'suppliers_type.id')
                ->first();
       return view('main.pages.suppliers.supplier-edit', compact('suppliers'));
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
 
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'contact' => 'required',
                'company' => 'required',
                'type' => 'required',
                'gender' => 'required',
                'file'         =>  'image|max:2048'
            ]);

        $suppliers = Suppliers::find($id);
        if($request->hasFile('image')){
            $request->validate([
              'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path = $request->file('image')->store('public/Suppliers');
            $suppliers->image = $path;
        }

        $suppliers->name = $request->name;
        $suppliers->email = $request->email;
        $suppliers->contact = $request->contact;
        $suppliers->company = $request->company;
        $suppliers->supplier_type_id = $request->type;
        $suppliers->gender = $request->gender;
        $suppliers->save();

        return redirect('dashboard/supplier')->with('success', 'Supplier Information Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suppliers = Suppliers::findOrFail($id);
        $suppliers->delete();
        return redirect('dashboard/supplier')->with('success', 'Supplier deleted successfully');
    }
}
