<div class="row" style="margin-top: 40px;">

    <div class="alert alert-dark" role="alert">
  STOCK DE SANG
</div>

    <table class="table table-bordered text-center">

        <thead>
        <tr class="bg-primary">
            <th>GROUPE</th>
            <th>RHESUS</th>
            <th>Quantité Disponible</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
            <?php foreach ($blooddata as $value): ?>
				<tr>
					<td><?php echo $value['groupe']; ?></td>
                    <td><?php echo $value['rhesus']; ?></td>
					<td><?php echo $value['quantite']; ?></td>
					<td><a href="<?php echo site_url("blood/editblood")."/"; ?><?php echo $value['id']; ?>"><i class="fas fa-pencil-alt btn btn-success"></i></a>&nbsp;&nbsp;<a href="<?php echo site_url('blood/viewblood').'/'; ?><?php echo $value['id']; ?>" ><i class="fa fa-eye btn btn-primary" ></i></a></td>
				</tr>
            <?php endforeach; ?>
        </tbody>

    </table>


</div>