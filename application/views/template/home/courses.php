
    
		<h3 >Vue Détails</h3>
	
	<div class="well">
		<?php foreach ($coursedata as $value): ?>
			
		<div class="card">
			<?php if ($value['Destination'] == "") {
				echo "<h4>Aucune course en cours pour le moment..</h4>";
			} ?>
		<h4>Banque de sang :<span style="color: red"> <?php echo $value['Destination']; ?></span></h4>
		<h4>Date & Heure :<span style="color: red"> <?php echo $value['Temps']; ?></span></h4>
		<h4>Nom du Transporteur :<span style="color: red"> <?php echo $value['NomTransporteur']; ?></span></h4>
		<h4>Propriétaire :<span style="color: red"> <?php echo $value['idTransporteur']; ?></span></h4>
		<a href="<?php echo site_url("recherche/update_en_cours")."/"; ?><?php echo $value['id']; ?>"
		 class="btn btn-success">Effectuer</a>
				</div>	
				 <?php endforeach; ?>
	</div>
        