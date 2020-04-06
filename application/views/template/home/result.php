<br><br><br>
<hr>
 <?php foreach ($blooddata as $value): ?>
				<div class="card">
          <?php  
                ;
          ?>
  <div class="card-header">
    <p>BANQUE DE SANG: <strong><?php echo $value['proprietaire']; ?></strong></p>
  </div>
  <div class="card-body">
    <h5 class="card-title">GROUPE : <strong><?php echo $value['groupe']; ?> <?php echo $value['rhesus']; ?></strong></h5>
    <p class="card-text">Quantité: <?php echo $value['quantite']; ?></p>
    <form action="<?php echo site_url("Blood/bloodalert"); ?>"  method="post">
      <input type="hidden" name="commande" value="<?php echo $this->session->userdata('nom'); ?>">
      <input type="hidden" name="destination" value="<?php echo $value['proprietaire']; ?>">
      <input type="submit" class="btn btn-success" value="Lancer une Alerte" >
    </form>
  </div>
</div>
            <?php endforeach; ?>