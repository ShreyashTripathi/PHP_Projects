
<nav class = "navbar navbar-inverse  navContainer">
        <div class = "container-fluid">  
	    <div class = "navbar navbar-header">
                <div class = "navbar navbar-brand"><a href = "index.php" style = "text-decoration: none; color:white;">The Mobile Store</a></div>
			<button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = "#navLinks">
			<span class = "icon-bar"></span>
			<span class = "icon-bar"></span>
			<span class = "icon-bar"></span>
			</button>
	    </div>
            <?php
                if(!isset($_SESSION['id']))
                {
             ?>
	    <div class = "collapse navbar-collapse" id = "navLinks">
	    <ul class = "nav navbar-nav navbar-right">
		 <li><a href = "register.php"><span class = "glyphicon glyphicon-user"></span> Sign up</a></li>
		 <li><a href = "login.php"><span class = "glyphicon glyphicon-log-in"></span> Login</a></li>
                 <li><a href = "aboutUs.php"><span class = "glyphicon glyphicon-log-in"></span> About Us</a></li>
                 <li><a href = "contactUs.php"><span class = "glyphicon glyphicon-log-in"></span> Contact Us</a></li>
		</ul>
	    </div>
            <?php
                }
                else
                {
            
            ?>
            <div class = "collapse navbar-collapse" id = "navLinks">
	    <ul class = "nav navbar-nav navbar-right">
		 <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
		 <li><a href = "setting.php"><span class = "glyphicon glyphicon-cog"></span> Settings</a></li>
		 <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-out"></span> Log out</a></li>
		</ul>
	    </div>
            <?php
                }
            ?>
	    </div>   
	    </nav>
