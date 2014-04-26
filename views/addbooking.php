<?php require_once 'libs/models/mokki.php'; ?>
<?php if (!empty($data->virheet)): ?>
<div class="alert alert-danger"><?php echo $data->virheet; ?></div>
<?php endif; ?>

<form class="form-horizontal" role="form" action="../newbookingController.php" method="POST">
    <fieldset>
    <legend>Lisää vierailu</legend>
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Alkupvm</label>  
        <div class="col-md-4">
        <input name="alku" type="date" value="" placeholder="vvvv-kk-pp" class="form-control input-md" autofocus>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Loppupvm</label>  
        <div class="col-md-4">
            <input name="loppu" type="date" value="" placeholder="vvvv-kk-pp" class="form-control input-md" autofocus>
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
    <input type="hidden" name="user" value="<?php echo $_SESSION['user']; ?>">

    </fieldset>
    <button class="btn btn-success" type="submit">Tallenna</a></button>
    <a class="btn btn-danger" type="button" href="index.php">Peruuta</a>
</form>