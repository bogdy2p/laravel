@extends('templates.default')




@include('templates/partials/site_menu_default')


@section('content')


<?php 
$data = Session::all();
echo "<pre>";
print_r($data);
echo "</pre>";
?>



<br/><br/><br/><br/><br/><br/>

<h1>Welcome To The Website</h1>

@stop