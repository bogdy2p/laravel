@extends('layouts.default')

@section('content')
<h1> Create User</h1>

{{ Form::open(['route' => 'users.store']) }}

<div>

    {{ Form::label('username','Username: ') }}

    {{ Form::text('text','username') }}

</div>

<div>

    {{ Form::label('password','Password:') }}

    {{ Form::password('password') }}

</div>

<div>
    
    {{ Form::submit('Create User') }}

</div>

    {{ Form::close() }}

@stop

@section('footer')
<?php echo '<br /><br /><br />' ?>
<?php echo 'This is echoed into the footer!'; ?>
@stop