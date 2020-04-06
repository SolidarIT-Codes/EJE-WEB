

    <div class="jumbotron top-spacing">
       <h3>Nouvelle Campagne</h3>
       <?php 
          $date = date("Y-m-d");
       ?>
   </div>
<br>
<div class="container">
  <form action="<?php echo site_url("Campagne/addcamp"); ?>" method="post">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Titre</label>
    <div class="col-sm-10">
      <input type="text" name="titre" class="form-control form-control-lg majuscule" id="inputEmail3">
    </div>
    <span style="color: red"><?php echo form_error('titre'); ?></span>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Date</label>
    <div class="col-sm-10">
      <input type="date" name="moment" min="<?php echo $date; ?>" class="form-control form-control-lg" id="inputEmail3">
    </div>
    <span style="color: red"><?php echo form_error('moment'); ?></span>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Ville</label>
    <div class="col-sm-10">
      <input type="text" name="ville" class="form-control form-control-lg majuscule" id="inputPassword3">
    </div>
    <span style="color: red"><?php echo form_error('ville'); ?></span>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Heure</label>
    <div class="col-sm-10">
      <input type="time"  name="heure" class="form-control form-control-lg " id="inputPassword3">
    </div>
    <span style="color: red"><?php echo form_error('heure'); ?></span>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      <textarea class="form-control form-control-lg" name="desc" ></textarea>
    </div>
    <span style="color: red"><?php echo form_error('desc'); ?></span>
  </div>
  <div class="form-group row">
    <div class="col-sm-2">Diffusion large</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Oui
        </label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary btn-lg">Lancer</button>
    </div>
  </div>
</form>
</div>


<style type="text/css">
    .majuscule {
text-transform: uppercase;
}
    </style>