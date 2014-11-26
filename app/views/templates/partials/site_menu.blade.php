<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <!--This is the button that toggles the navigation on the mobiles!-->
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo URL::to('/'); ?>"><span class="">Home</span></a>

        </div>

                    @if(Auth::check())
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">

                            <li class="dropdown">   
                                <a class="dropdown-toggle" data-toggle="dropdown">Message</a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="">a</a></li>
                                    <li><a href="">b</a></li>
                                    <li><a href="">c</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">   
                                <a class="dropdown-toggle" data-toggle="dropdown">My Account</a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="">Add Post</a></li>
                                    <li><a href="">View My Posts</a></li>
                                    <li><a href="">View all existing posts!?!</a></li>
                                </ul>
                            </li>
                            <!-- IF USER IS ADMIN DISPLAY ADMIN -->
                                            @if(Auth::user()->account_level == 3)
                                            <li class="dropdown">   
                                                <a class="dropdown-toggle" data-toggle="dropdown">Administrate</a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="">Administrate Users</a></li>
                                                    <li><a href="">Administrate Groups</a></li>
                                                    <li><a href="">View Tables</a></li>
                                                    <li><a href="">Admin Detail Types</a></li>
                                                </ul>
                                            </li>
                                            @endif
                            <!-- END IF USER IS ADMIN DISPLAY -->
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                
                                <a href="/user/{{Auth::user()->username}}/edit">Welcome ,  {{ Auth::user()->username }} ! </a>
                            </li>
                            <li class="{{ (strpos(URL::current(), URL::to('logout'))!== false) ? 'active': ''}}">{{HTML::link('logout','Logout')}}</li>
                        </ul>
                        @else
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">

                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="<?php echo URL::to('/login'); ?>">Login</a>
                                </li>    
                                <li>  
                                    <a href="<?php echo URL::to('/register'); ?>">Register</a> 
                                </li>
                            </ul>
                        </div>
                        @endif   
        </div>
    </div>
</nav>