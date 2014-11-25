@extends('templates.default')


@section('content')

<div class="row">
    <div class="col-xs-12 col-md-2"></div>
    <div class="col-xs-12 col-md-8">
        <h1 align="center">Welcome To The Website</h1>
    </div>
    <div class="col-xs-12 col-md-2"></div>
</div>


   @if(Auth::check())
   THIS IS DISPLAYED ONLy IF LOGGED IN
   
   @else
   <div class="row">
    <div class="col-xs-12 col-md-2"></div>
    <div class="col-xs-12 col-md-8">
        <h3 align="center">This will be the main page displayed to unauthenticated users.</h3>
    </div>
    <div class="col-xs-12 col-md-2"></div>
    </div>
   @endif


@stop