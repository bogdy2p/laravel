@extends('templates.default')

@section('content') 

<div class="login_form">
        {{ Form::open(['route' => 'sessions.store']) }}
        
        <div>
        {{ Form::label('email','Email:') }}
        
        {{ Form::email('email') }}
        </div>
        
        <div>
        {{ Form::label('password','Password:') }}
        
        {{ Form::password('password') }}
        </div>
        
        <div>
            <br />
           {{ Form::submit('Login') }} 
            
        </div>
        
        {{ Form::close() }}
</div>
@stop  