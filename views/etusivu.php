<h1>Terve <?php echo $data->tervehdys; ?>!</h1>
    <h3>Tulevia vierailuja mökeillä:</h3>

    <table class="table table-hover table-condensed">
        <tr>
                <th>Kuka?</th>
                <th>Koska menee</th>
                <th>Koska pois</th>
                <th>Minne</th>
        </tr>
        <?php $date = new DateTime("now"); ?>
        <?php foreach($data->varaukset as $varaus): ?>
            <?php $dateTwo = new DateTime($varaus->getLoppu()); ?>
            <?php if ($dateTwo > $date): ?>
            <tr>
                    <td><?php echo $varaus->getUsernimi(); ?></td>
                    <td><?php echo $varaus->getAlku(); ?></td>
                    <td><?php echo $varaus->getLoppu(); ?></td>
                    <td><?php echo $varaus->getMokkinimi(); ?></td>
                    <td><form action="../deletebooking.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $varaus->getId(); ?>">
                        <button class="btn btn-danger" type="submit">Poista</button></form>
                    </td>
            </tr>
            <?php endif; ?>
        <?php endforeach; ?>
    </table>
    
    <a class="btn btn-info" type="button" href="../newbooking.php">Lisää vierailu</a>