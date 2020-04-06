<div class="jumbotron top-spacing">
       <h3>RECHERCHE!</h3>
   </div>
    
<div class="container">
  <form action="<?php echo site_url('recherche/load'); ?>" method="post" >
  <div class="form-row">
    <div class="col">
      <div class="form-group col-md-4">
      <label for="inputState">Groupe</label>
      <select id="inputState" name="groupe" class="form-control">
        <option selected>A</option>
        <option>B</option>
        <option >O</option>
        <option>AB</option>
      </select>
    </div>
    </div>
    <div class="col">
      <div class="form-group col-md-4">
      <label for="inputState">Rhesus</label>
      <select id="inputState" name="rhesus" class="form-control">
        <option selected><strong>+</strong></option>
        <option><strong>-</strong></option>
      </select>

    </div>
    </div>
    
  </div>
  <br>
  &nbsp;&nbsp;<button class="btn btn-primary" type="submit">Rechercher <i class="fa fa-search"></i></button>
</form>
</div>

