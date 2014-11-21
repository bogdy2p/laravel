<!doctype html>

<html>
    
    <head>
        <meta charset="utf-8">
        <title>CHANGEME | UserGroups</title>
        
        {{ HTML::style('assets/css/bootstrap.css') }}
        {{ HTML::style('assets/css/style.css') }}
        
        @yield('header')
    </head>
    
    <body>
        
               @include('templates/partials/site_menu')
        
               @yield('content') 