<!DOCTYPE html>
<html>
    <head>
    	<link href="../css/bootstrap.css" rel="stylesheet">
		<link href="../css/bootstrap-theme.css" rel="stylesheet">
		<link href="../css/signin.css" rel="stylesheet">
		<link href="../css/main.css" rel="stylesheet">
        <title>Demo</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <div class="container">
        <?php if (!empty($_SESSION['user'])): ?>
    	<nav class="navbar navbar-default navbar-static-top" role="navigation">
            <ul class="nav navbar-nav">
                <li><a href="../index.php">Etusivu</a></li>
                <li><a href="../cabin.php">Mökki 1</a></li>
                <li><a href="../cabin.php">Mökki 2</a></li>
                <li><a href="../needs.php">Kaikki puutteet</a></li>
                <li><a href="../newneed.php">Lisää puute</a></li>
                <li><a href="../logout.php">Kirjaudu ulos</a></li>
            </ul>
        </nav>
        <?php endif; ?>
            
            <?php
            require 'views/'.$sivu;
            ?>
        </div>
    </body>
</html>