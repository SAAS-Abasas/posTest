<?php

namespace App\Http\Controllers;

use App\Http\Requests\SupplierRequest;
use App\Models\Product;
use App\Models\purchase;
use App\Models\setting;
use App\Models\supplier;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
$settings = setting::where('table_name','suppliers')->first();
$settings->setting= json_decode(  json_decode(  $settings->setting,true),true);

        
        $dataArray=[
            'settings'=>$settings,
            'items' => supplier::all(),
        ];
 
        // return $dataArray;

        return view('suppliers.index', compact('dataArray'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SupplierRequest $request)
    {
        supplier::create($request->all());
        return redirect()->back()->withSuccess(['Successfully Created']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(supplier $supplier , Request $request)
    {
        $monthStart= Carbon::now()->format('Y-m-01 00:00:00');
        $monthEnd= Carbon:: now()->format('Y-m-31 23:59:59');
        if(!is_null($request->month)){
            $monthStart= Carbon:: parse($request->month)->format('Y-m-01 00:00:00');
            $monthEnd= Carbon:: parse($request->month)->format('Y-m-31 23:59:59');
        }
       $month = Carbon:: parse($monthStart)->format('F');
        $purchases= purchase::where('supplier_id', $supplier->id)->where('created_at','<=',$monthEnd)->where('created_at','>=',$monthStart)->get(); 
        return view('suppliers.show',compact('supplier','purchases','month'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(SupplierRequest $request, supplier $supplier)
    {

         
        $supplier->update($request->all());
        return redirect()->back()->withSuccess(['Successfully Updated']);

        // $supplier->name= $request->name;
        // $supplier->phone= $request->phone;
        // $supplier->address= $request->address;
        // $supplier->company= $request->company;
        // $supplier->save();
        // return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(supplier $supplier)
    {

        $supplier->delete();
        return Redirect::back()->withErrors(["Item Deleted" ]);


    }

 



    public function supplierCheck(Request $request){



        $supplier = supplier::where('phone',$request->phone)->first();
        if (is_null($supplier)) {
            return 0;
        } else{
           
            return $supplier;
        }

    }






    public function supplierStore(Request $request){

        $supplier= new supplier;
        $supplier->name = $request->name;
        $supplier->phone = $request->phone;
        $supplier->address = $request->address;
        $supplier->company = $request->company;
        $supplier->due = 0;
        $supplier->save();
        return $supplier;
        
    }
}



