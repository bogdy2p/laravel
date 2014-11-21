@extends('templates.default')

@section('content')
<h1> Create User</h1>

{{ Form::open(['route' => 'users.store']) }}

<div>
    {{ Form::label('email','Email: ') }}
    {{ Form::email('email') }}
    {{ $errors->first('email')}}
    
</div>
<div>
    {{ Form::label('firstname','First Name: ') }}
    {{ Form::text('firstname') }}
</div>
<div>
    {{ Form::label('lastname','Last Name: ') }}
    {{ Form::text('lastname') }}
</div>
<div>
    {{ Form::label('username','Username: ') }}
    {{ Form::text('username') }}
    {{ $errors->first('username')}}
</div>
<div>
    {{ Form::label('password','Password:') }}
    {{ Form::password('password') }}
    {{ $errors->first('password')}}
</div>
<div>
    {{ Form::label('pass_conf','Confirm Password: ') }}
    {{ Form::password('pass_conf') }}
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