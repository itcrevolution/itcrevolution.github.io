<?php

?>
<nav class="navbar navbar-default">
            <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
        		<span class="sr-only">Toggle navigation</span>
        		<span class="icon-bar"></span>
       		 	<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">ITC - FTIK USM</a>
    		</div>
    		
    		<!-- Collect the nav links, forms, and other content for toggling -->
    		<div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
    			<li class="active"><a href="">Login</a></li>
        		<li><a href="#">Link</a></li>
        		<li class="dropdown">
        			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
        			<ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-right" role="form" method="post" action="home/login">
  			
  			<div class="form-group">
                            <input type="text" class="form-control" name="data[username]" placeholder="Username">
 			</div>
 			<div class="form-group">
                            <input type="password" class="form-control" name="data[password]" placeholder="Password">
  			</div>
  			<div class="btn-group">	
                            <button class="btn btn-default" type="submit">LogIn</button>
                            <a class="btn btn-default" data-toggle="modal" data-target="#reg">Register</a>
  			</div>
                    </form>
    		</div>
            </div>
	</nav>