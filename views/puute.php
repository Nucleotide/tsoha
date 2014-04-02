<h3>Puutteet mökeillä</h3>
<?php if (EMPTY($data->puutteet)): ?>
    <p>Ei puutteita!</p>
<?php endif ?>

    <table class="table table-hover table-condensed">
        <tr>
            <th>Lisääjä</th>
            <th>Ajankohta</th>
            <th>Mökki</th>
            <th>Puute</th>
        </tr>
        <?php foreach($data->puutteet as $puute): ?>
            <tr>
                <td><?php echo $puute->getUser(); ?></td>
                <td><?php echo $puute->getLuotu(); ?></td>
                <td><?php echo $puute->getMokki(); ?></td>
                <td><?php echo $puute->getKuvaus(); ?></td>
                <td><a class="btn btn-success" type="button" href="">Muokkaa</a></td>
                <td><a class="btn btn-danger" type="button" href="">Poista</a></td>
            </tr>
        <?php endforeach; ?>    			
    </table>

    <a class="btn btn-info" type="button" href="../newneed.php">Lisää puute</a>