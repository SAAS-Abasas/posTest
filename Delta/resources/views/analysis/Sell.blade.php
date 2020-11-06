
@extends('includes.app')


@section('content')


<h1 style="text-align: center">Sell line</h1> 
<x-line-chart :dataArray="$dailyGraphData" />
<h1 style="text-align: center">Sell Daily</h1> 
<x-bar-chart :dataArray="$sellAnalysisDaily" />
<h1 style="text-align: center">Sell Monthly</h1> 
<x-bar-chart :dataArray="$sellAnalysisMonthly" />
<h1 style="text-align: center">Sell Yearly</h1> 
<x-bar-chart :dataArray="$sellAnalysisYearly" />

 
@endsection