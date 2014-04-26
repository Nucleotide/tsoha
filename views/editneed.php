<?php require_once 'libs/models/mokki.php'; ?>
<?php if (!empty($data->virheet)): ?>
<div class="alert alert-danger"><?php echo $data->virheet; ?></div>
<?php endif; ?>

<form class="form-horizontal" role="form" action="../editneedController.php" method="POST">
    <fieldset>
    <legend>Muokkaa puutetta</legend>
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Mitä puuttuu?</label>  
        <div class="col-md-4">
            <input name="kuvaus" type="text" value="<?php echo htmlspecialchars($data->kuvaus); ?>" class="form-control input-md" autofocus>
        </div>
    </div>

    <input type="hidden" name="id" value="<?php echo $data->id; ?>">
    <input type="hidden" name="user" value="<?php echo $_SESSION['user']; ?>">
    <input type="hidden" name="luotu" value="<?php echo date("Y-m-d"); ?>">

    </fieldset>
    <button class="btn btn-success" type="submit">Tallenna</a></button>
    <a class="btn btn-danger" type="button" href="needs.php">Peruuta</a>
</form>