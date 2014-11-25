@extends('templates.default')


@section('content')
<h2> You will now edit user {{ $user->username }} </h2>


    {{ Form::open(['route' => 'users.edit']) }}

    <div>
          {{ Form::label('firstname','First Name: ') }}
          {{ Form::text('first_name') }}
    </div>
    
    <div>
          {{ Form::label('lastname','Last Name: ') }}
          {{ Form::text('last_name') }}
    </div>

    <div>
          {{ Form::submit('Update Details') }}
    </div>

    {{ Form::close() }}


@stop