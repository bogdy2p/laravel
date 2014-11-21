<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
       
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example">
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
            
                <li class="dropdown">
                    
                    <a class="dropdown-toggle" data-toggle="dropdown">Message</a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="">a</a></li>
                        <li><a href="">b</a></li>
                        <li><a href="">c</a></li>
                    </ul>
                    
                    
                </li>
            
            
            </ul>
            
            
            
        </div>
    </div>
</nav>