@extends('templates.default')


@section('content')
<h2> You will now edit user {{ $user->username }} </h2>
<pre>
    {{$user}}
</pre>


    {{ Form::open(array('method'=>'put', 'action' => array('UserController@update',$user->id))) }}

    <div>
          {{ Form::label('firstname','First Name: ') }}
          {{ Form::text('first_name', $user->first_name) }}
    </div>
    
    <div>
          {{ Form::label('lastname','Last Name: ') }}
          {{ Form::text('last_name', $user->last_name) }}
    </div>

    <div>
        <br />
          {{ Form::submit('Update Details') }}
    </div>

    {{ Form::close() }}


@stop