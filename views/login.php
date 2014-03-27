<!DOCTYPE html>
<html>
    <head>
    	<link href="../css/bootstrap.css" rel="stylesheet">
		<link href="../css/signin.css" rel="stylesheet">
        <title>Demo</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
	<body>
	
	    <div class="container">
	
	     <form action="../doLogin.php" method="POST" class="form-signin" role="form">
	        <h2 class="form-signin-heading">Kirjaudu sisään</h2>
	        Käyttäjänimi:<input type="text" name="username" class="form-control"/>
	        Salasana:<input type="password" name="password" class="form-control"/>
	        <button class="btn btn-lg btn-primary btn-block" type="submit">Kirjaudu</button>
	      </form>
	    </div>
    </body>
</html>