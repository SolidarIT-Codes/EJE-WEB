<div class="row" style="margin-top: 40px;">

    <table class="table table-bordered text-center">

        <thead>
        <tr class="bg-primary">
            <th>Nom</th>
            <th>Email</th>
            <th>Statut</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
            <?php foreach ($blooddata as $value): ?>
				<tr>
					<td><?php echo $value['Nom']; ?></td>
                    <td><?php echo $value['Email']; ?></td>
					<td><?php if ($value['Statut'] == 1) {
                        echo "Banque de Sang";
                    }else
                    echo "Hôpital";
                    ?></td>
					<td><a href="<?php echo site_url('admin/view').'/'; ?><?php echo $value['id']; ?>" ><i class="fa fa-eye btn btn-primary"></i></a>&nbsp;&nbsp;
    <a  href="<?php echo site_url('admin/delpartnlist').'/'; ?><?php echo $value['id']; ?>"><i class=" fas fa-trash btn btn-danger " ></i></a>
</td>
				</tr>
            <?php endforeach; ?>
        </tbody>

    </table>


</div>