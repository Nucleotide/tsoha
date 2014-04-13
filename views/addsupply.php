<?php require_once 'libs/models/mokki.php'; ?>
<?php if (!empty($data->virheet)): ?>
<div class="alert alert-danger"><?php echo $data->virheet; ?></div>
<?php endif; ?>

<form class="form-horizontal" role="form" action="../newsupplyController.php" method="POST">
    <fieldset>
    <legend>Lisää Tarvike</legend>
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Mitä löytyy?</label>  
        <div class="col-md-4">
        <input name="kuvaus" type="text" value="" class="form-control input-md" autofocus>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label">Valitse mökki</label>
        <select name="mokki">
        <?php foreach(Mokki::haeKaikki() as $mokki): ?>
        <option value="<?php echo $mokki->getId(); ?>"><?php echo $mokki->getNimi(); ?></option>
        <?php endforeach; ?>
        </select>

    </div>
    <input type="hidden" name="luotu" value="<?php echo date("Y-m-d"); ?>">

    </fieldset>
    <button class="btn btn-success" type="submit">Tallenna</a></button>
    <a class="btn btn-danger" type="button" href="supplies.php">Peruuta</a>
</form>