@extends('includes.app')

@section('content')


<x-data-table
:dataArray="$dataArray"

/>



<script>
    $(document).ready(function(){

        $('#createNewForm').hide().removeClass("collapse");
        $('#AddNewFormButtonDiv').hide();
        $('.dataEditItemClass').hide();



    });



</script>

@endsection

