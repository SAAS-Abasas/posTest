
@extends('includes.app')


@section('content')


<h1 style="text-align: center">Sell Daily</h1> 
<x-bar-chart :dataArray="$sellAnalysisDaily" />
<h1 style="text-align: center">Sell Monthly</h1> 
<x-bar-chart :dataArray="$sellAnalysisMonthly" />

 
@endsection