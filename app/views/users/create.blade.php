@extends('templates.default')

@section('content')

<div class="login_form">
<h3>Register Account</h3>
    {{ Form::open(['route' => 'users.store']) }}
<div>
    {{ Form::label('email','Email: ') }}
    <br />
    {{ Form::email('email') }}
    <br />
    {{ $errors->first('email')}}
</div>
<div>
    {{ Form::label('firstname','First Name: ') }}
    {{ Form::text('first_name') }}
</div>
<div>
    {{ Form::label('lastname','Last Name: ') }}
    {{ Form::text('last_name') }}
</div>
<div>
    {{ Form::label('username','Username: ') }}
    {{ Form::text('username') }}
    <br />
    {{ $errors->first('username')}}
</div>
<div>
    {{ Form::label('password','Password:') }}
    {{ Form::password('password') }}
    <br />
    {{ $errors->first('password')}}
</div>
<div>
    {{ Form::label('pass_conf','Confirm Password: ') }}
    {{ Form::password('pass_conf') }}
    <br />
    {{ $errors->first('pass_conf')}}
</div>
<div>
    <br />
    {{ Form::submit('Create User') }}
</div>

    {{ Form::close() }}
    </div>
@stop

@section('footer')
                     {{' ECHOED INTO FOOTER'}}
@stop