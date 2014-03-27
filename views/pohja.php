<!DOCTYPE html>
<html>
    <head>
    	<link href="../css/bootstrap.css" rel="stylesheet">
		<link href="../css/bootstrap-theme.css" rel="stylesheet">
		<link href="../css/main.css" rel="stylesheet">
        <title>Demo</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
    	<nav class="navbar navbar-default navbar-static-top" role="navigation">
  			<div class="container">
  				<ul class="nav navbar-nav">
  					<li><a href="http://laxlax.users.cs.helsinki.fi/html-demo/">Etusivu</a></li>
  					<li><a href="http://laxlax.users.cs.helsinki.fi/html-demo/cabin1.html">Mökki 1</a></li>
  					<li><a href="http://laxlax.users.cs.helsinki.fi/html-demo/cabin2.html">Mökki 2</a></li>
  					<li><a href="http://laxlax.users.cs.helsinki.fi/html-demo/puutteet.html">Kaikki puutteet</a></li>
  					<li><a href="http://laxlax.users.cs.helsinki.fi/html-demo/uusi-puute.html">Lisää puute</a></li>
  					<li><a href="http://laxlax.users.cs.helsinki.fi/html-demo/login.html">Kirjaudu ulos</a></li>
  				</ul>	
  			</div>
		</nav>
		<div class="container">
		 	 <?php 

    		require 'views/'.$sivu;
  			?>
		</div>
    </body>
</html>