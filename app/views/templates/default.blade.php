<!doctype html>
<html>
    <head>
        <title>CHANGEME | UserGroups</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        {{ HTML::script('http://code.jquery.com/jquery-2.1.1.js')}}
        {{ HTML::script('http://code.jquery.com/jquery-migrate-1.2.1.min.js')}}
        {{ HTML::script('assets/js/bootstrap.js')}}
        {{ HTML::script('assets/js/less.js')}}
        {{ HTML::style('assets/css/bootstrap.css') }}
        {{ HTML::style('assets/css/style.less') }}
        
        @yield('header')
    </head>
    
    <body>
        @include('templates.partials.site_menu')
           
        
        @yield('content') 






          <br /><br /><br /><br />
        @yield('footer')
        
        
     
        
        
    </body>
</html>