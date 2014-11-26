@extends('templates.default')

@section('content') 

<div class="login_form">
        {{ Form::open(['route' => 'sessions.store']) }}
        
        <div>
        {{ Form::label('user_mail','Email/Username:') }}
        
        {{ Form::text('user_mail') }}
        
        
        </div>
        
        <div>
        {{ Form::label('password','Password:') }}
        
        {{ Form::password('password') }}
        
        
        </div>
        
        <div>
            {{ $errors->first()}}
            <br />
           {{ Form::submit('Login') }} 
            
        </div>
        
        {{ Form::close() }}
</div>
@stop  