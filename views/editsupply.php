<?php require_once 'libs/models/tarvike.php'; ?>
<?php if (!empty($data->virheet)): ?>
<div class="alert alert-danger"><?php echo $data->virheet; ?></div>
<?php endif; ?>

<form class="form-horizontal" role="form" action="../editsupplyController.php" method="POST">
    <fieldset>
    <legend>Muokkaa tarviketta</legend>
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Mitä puuttuu?</label>  
        <div class="col-md-4">
            <input name="kuvaus" type="text" value="<?php echo $data->kuvaus ?>" class="form-control input-md" autofocus>
        </div>
    </div>

    <input type="hidden" name="id" value="<?php echo $data->id; ?>">
    <input type="hidden" name="luotu" value="<?php echo date("Y-m-d"); ?>">

    </fieldset>
    <button class="btn btn-success" type="submit">Tallenna</a></button>
    <a class="btn btn-danger" type="button" href="supplies.php">Peruuta</a>
</form>