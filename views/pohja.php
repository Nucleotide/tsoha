<!DOCTYPE html>
<html>
    <head>
        <link href="../css/main.css" rel="stylesheet">
        <link href="../css/bootstrap-theme.css" rel="stylesheet">
        <link href="../css/bootstrap.css" rel="stylesheet">
        <link href="../css/signin.css" rel="stylesheet">
		
        <title>Demo</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <div class="container">
        <?php if (!empty($_SESSION['ilmoitus'])): ?>
        <div class="alert alert-success">
        <?php echo $_SESSION['ilmoitus']; ?>
        </div>
        <?php
        unset($_SESSION['ilmoitus']); 
        endif;
        ?>
        <?php if (!empty($_SESSION['user'])): ?>
    	<nav class="navbar navbar-default navbar-static-top" role="navigation">
            <ul class="nav navbar-nav">
                <li><a href="../index.php">Etusivu</a></li>
                <li><a href="../supplies.php">Kaikki tarvikkeet</a></li>
                <li><a href="../newsupply.php">Lisää tarvike</a></li>
                <li><a href="../needs.php">Kaikki puutteet</a></li>
                <li><a href="../newneed.php">Lisää puute</a></li>
                <li><a href="../newbooking.php">Lisää vierailu</a></li>
                <li><a href="../libs/controllers/logout.php">Kirjaudu ulos</a></li>
            </ul>
        </nav>
        <?php endif; ?>
            
            <?php
            require 'views/'.$sivu;
            ?>
        </div>
    </body>
</html>