<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExpenseRequest;
use App\Models\employee;
use App\Models\expense;
use App\Models\expenseAnalysisDaily;
use App\Models\expenseAnalysisMonthly;
use App\Models\expenseAnalysisYearly;
use App\Models\expenseMonthly;
use App\Models\expenseType;
use App\Models\setting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use function GuzzleHttp\json_decode;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return $request;
        

        $settings = setting::where('table_name', 'expenses')->first();
        $settings->setting = json_decode(json_decode($settings->setting, true), true);

        $month= Carbon::now()->format('Y-m');
        if(!is_null($request->month)){
            $month=$request->month;
        }
        $dataArray = [
            'settings' => $settings,
            'items' => expense::where('created_at','>=',$month.'-01 00:00:00')->where('created_at','<=',$month.'-31 23:59:59')->get(),
            'employees' => employee::all(),
            'expense_types' => expenseType::all(),
        ];
        $month= Carbon::parse($month)->format('F, Y');
        return view('expenses.index', compact('dataArray','month'));
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
    public function store(ExpenseRequest $request)
    {
      //  return $request;
        expense::create($request->all());
        $month = Carbon::now()->format('Y-m-01');
        $date = Carbon::now()->format('Y-m-d');
        $year = Carbon::now()->format('Y');
        $expenseMonthly= expenseMonthly::where('month',$month)->where('employee_id',$request->employee_id)->first();
        if(is_null($expenseMonthly)){
            $expenseMonthly= new expenseMonthly;
            $expenseMonthly->month=$month;
            $expenseMonthly->employee_id=$request->employee_id;
        }

        // Expense Analysis start
        $analysysDate= expenseAnalysisDaily::where('date',$date)->first();
        $analysysMonth= expenseAnalysisMonthly::where('month',$month)->first();
        $analysysYear= expenseAnalysisYearly::where('year',$year)->first();
        if(is_null($analysysDate)){
            $analysysDate= new expenseAnalysisDaily;
            $analysysDate->date=$date;
        }
        if(is_null($analysysMonth)){
            $analysysMonth= new expenseAnalysisMonthly;
            $analysysMonth->month=$month;
        }
        if(is_null($analysysYear)){
            $analysysYear= new expenseAnalysisYearly;
            $analysysYear->year=$year;
        }
        $analysysDate->expense += $request->amount;
        $analysysMonth->expense += $request->amount;
        $analysysYear->expense += $request->amount;
        $analysysDate->save();
        $analysysMonth->save();
        $analysysYear->save();
        // Expense Analysis end


        $expenseMonthly->amount += $request->amount;
        $expenseMonthly->save();
        return redirect()->back()->withSuccess(['Successfully Created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function show(expense $expense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit(expense $expense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, expense $expense)
    {
        $previous = $expense->amount;
        $date = $expense->created_at->format('Y-m-d');
        $month = $expense->created_at->format('Y-m-01');
        $year = $expense->created_at->format('Y');
        $expense->update($request->all());
        if(!is_null( $request->amount)){ 
            $expense->changed_amount -=$previous;
            $expense->changed_amount +=$request->amount;
            $expenseMonthly= expenseMonthly::where('month',$month)->where('employee_id',$expense->employee_id)->first();
            $expenseMonthly->amount -=$previous;
            $expenseMonthly->amount +=$request->amount;

        


         // Expense Analysis start
         $analysysDate= expenseAnalysisDaily::where('date',$date)->first();
         $analysysMonth= expenseAnalysisMonthly::where('month',$month)->first();
         $analysysYear= expenseAnalysisYearly::where('year',$year)->first();
         if(is_null($analysysDate)){
             $analysysDate= new expenseAnalysisDaily;
             $analysysDate->date=$date;
         }
         if(is_null($analysysMonth)){
             $analysysMonth= new expenseAnalysisMonthly;
             $analysysMonth->month=$month;
         }
         if(is_null($analysysYear)){
             $analysysYear= new expenseAnalysisYearly;
             $analysysYear->year=$year;
         }
         $analysysDate->expense += $request->amount - $previous;
         $analysysMonth->expense += $request->amount- $previous;
         $analysysYear->expense += $request->amount- $previous;
         $analysysDate->save();
         $analysysMonth->save();
         $analysysYear->save();
         // Expense Analysis end

        }
        $expense->save();
        $expenseMonthly->save();
        return redirect()->back()->withSuccess(['Successfully Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(expense $expense)
    {
        return Redirect::back()->withErrors(["Can't Delete" ]);
    }
}
