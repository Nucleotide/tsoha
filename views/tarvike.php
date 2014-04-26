<h3>Tarvikkeet mökeillä</h3>
<?php if (EMPTY($data->tarvikkeet)): ?>
<div class="alert alert-danger">
    Ei tarvikkeita, aika hankkia!
</div>
<?php endif ?>

    <table class="table table-hover table-condensed">
        <tr>
            <th>Tieto lisätty/muokattu</th>
            <th>Mökki</th>
            <th>Tarvike</th>
        </tr>
        <?php foreach($data->tarvikkeet as $tarvike): ?>
            <tr>
                <td><?php echo $tarvike->getLuotu(); ?></td>
                <td><?php echo $tarvike->getMokkiname(); ?></td>
                <td><?php echo htmlspecialchars($tarvike->getKuvaus()); ?></td>
                <td><a class="btn btn-success" type="button" href="tarvike.php?id=<?php echo
                    $tarvike->getId() ?>">Muokkaa</a></td>
                <td><form action="../deleteSupply.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $tarvike->getId(); ?>">
                    <button class="btn btn-danger" type="submit">Poista</button></form>
                </td>
            </tr>
        <?php endforeach; ?>    			
    </table>

    <a class="btn btn-info" type="button" href="../newsupply.php">Lisää tarvike</a>