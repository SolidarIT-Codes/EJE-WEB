<div class="row" style="margin-top: 40px;">

    <table class="table table-bordered text-center">

        <thead>
        <tr class="bg-primary">
           
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Date de Naissance</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
            <?php foreach ($blooddata as $value): ?>
				<tr>
                    <td><?php echo $value['Nom']; ?></td>
                    <td><?php echo $value['Prenoms']; ?></td>
                    <td><?php echo $value['Email']; ?></td>
                    <td><?php echo $value['Datnais']; ?></td>
					<td><a href="<?php echo site_url('admin/view').'/'; ?><?php echo $value['id']; ?>" ><i class="fa fa-eye btn btn-primary"></i></a>&nbsp;&nbsp;
    <a  href="<?php echo site_url('blood/viewblood').'/'; ?><?php echo $value['id']; ?>"><i class=" fas fa-trash btn btn-danger " ></i></a>
</td>
				</tr>
            <?php endforeach; ?>
        </tbody>

    </table>


</div>