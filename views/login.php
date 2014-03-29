<?php if (!empty($data->virhe)): ?>
<div class="alert alert-danger"><?php echo $data->virhe; ?></div>
<?php endif; ?>

<form class="form-signin" role="form" action="loginControl.php" method="POST">
    <h2 class="form-signin-heading">Kirjaudu sisään</h2>
    Käyttäjänimi: <input type="text" name="username" class="form-control" value="<?php echo $data->kayttaja; ?>" autofocus>
    Salasana: <input type="password" name="password" class="form-control">
    <button class="btn btn-lg btn-primary btn-block" type="submit">Kirjaudu</button>
</form>
