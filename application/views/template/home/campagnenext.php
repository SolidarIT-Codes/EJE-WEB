
    
		<h3 >Campagnes à venir</h3>
	
	<div class="well">
		<?php foreach ($camp as $value): ?>
			
		<div class="card">
			<?php
			$lien = $value['link'];
			?>
		<h4>Titre :</h4>
 <?php echo $value['titre']; ?>
		<h4>Date & Heure :</h4>
<?php echo $value['moment']; ?> à <?php echo $value['heure']; ?>
		<h4>Ville :</h4>
<?php echo $value['ville']; ?></h4>
		<h4>Description :</h4>
<?php echo $value['description']; ?>
		<a href="<?php echo base_url() ; ?><?php echo $lien ;?>" style="text-align: center;"><h6><span style="color: red">| Voir et imprimer le Qr Code |</span></h6></a>
				</div>	
				 <?php endforeach; ?>
	</div>
        