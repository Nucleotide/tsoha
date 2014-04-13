<h3>Puutteet mökeillä</h3>
<?php if (EMPTY($data->puutteet)): ?>
<div class="alert alert-success">
    Ei puutteita!
</div>
<?php endif ?>

    <table class="table table-hover table-condensed">
        <tr>
            <th>Lisääjä/Muokkaaja</th>
            <th>Ajankohta</th>
            <th>Mökki</th>
            <th>Puute</th>
        </tr>
        <?php foreach($data->puutteet as $puute): ?>
            <tr>
                <td><?php echo $puute->getUsername(); ?></td>
                <td><?php echo $puute->getLuotu(); ?></td>
                <td><?php echo $puute->getMokkiname(); ?></td>
                <td><?php echo $puute->getKuvaus(); ?></td>
                <td><a class="btn btn-success" type="button" href="puute.php?id=<?php echo
                    $puute->getId() ?>">Muokkaa</a></td>
                <td><form action="../deleteNeed.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $puute->getId(); ?>">
                    <button class="btn btn-danger" type="submit">Poista</button></form>
                </td>
            </tr>
        <?php endforeach; ?>    			
    </table>

    <a class="btn btn-info" type="button" href="../newneed.php">Lisää puute</a>