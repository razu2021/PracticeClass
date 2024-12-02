@extends('layouts.webmaster')
@section('web_content')


@php 

$status = 1;

@endphp

    <main>
   
<h1>
    all component load is here 
</h1>

        {{-- success massages show  --}}
         <x-comon_com.success_massages msg="Information added Successfully!" class="success_massages"/>
         <br>
         {{-- alert massages show  --}}
         <x-comon_com.success_massages msg="Information added Faild !" class="error_massages"/>
         <br>
         {{-- warning massages show  --}}
         <x-comon_com.success_massages msg="only user can access for added post Data !" class="warning_massages"/>



         <br>
         <br>
         <br>






    {{-- how to apply conditinal statement  --}}
        <h4>conditinal statement</h4>
        @if($status == 1)
            <x-comon_com.success_massages msg="Information added Successfully!" class="success_massages"/>
        @elseif($status == 0)
            <x-comon_com.success_massages msg="Information added Faild !" class="error_massages"/>
        @else
            <x-comon_com.success_massages msg="only user can access for added post Data !" class="warning_massages"/>
        @endif

    </main>
  
@endsection 


