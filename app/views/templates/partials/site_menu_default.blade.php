<nav class="navbar navbar-default" role="navigation">
    <div class="container">
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
    </div>
</nav>