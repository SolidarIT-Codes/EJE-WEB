
    
		<h3 >Vue Détails</h3>
	
	<div class="well">
		<div class="card">
		<h4>ID : <span style="color: red"><?php echo $blooddata[0]['id']; ?></span></h4>
		<h4>Groupe :<span style="color: red"> <?php echo $blooddata[0]['groupe']; ?></span></h4>
		<h4>Rhesus :<span style="color: red"> <?php echo $blooddata[0]['rhesus']; ?></span></h4>
		<h4>Quantité :<span style="color: red"> <?php echo $blooddata[0]['quantite']; ?></span></h4>
		<h4>Propriétaire :<span style="color: red"> <?php echo $blooddata[0]['proprietaire']; ?></span></h4>
				</div>	
	</div>
        
	<a href="<?php echo site_url("Home"); ?>" class="btn btn-primary">Retour</a>