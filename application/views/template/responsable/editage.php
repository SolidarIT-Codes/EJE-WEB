

    <div class="card">
        <h3>Modification</h3>
    </div>


    <form action="<?php echo site_url('admin/update'); ?>" method="post" style=" margin:  0 auto;">

        <div class="col-md-6">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" name="groupe" class="form-control" readonly value="<?php 
                echo $blooddata[0]['Nom']; ?>">
            </div>
            <div class="form-group">
                <label for="name">Prenom</label>
                <input type="text" name="groupe" class="form-control" readonly value="<?php echo $blooddata[0]['Prenoms']; ?>">
            </div>


            <div class="form-group">
                <label for="name">Groupe</label>
                <input type="hidden" name="id" value="<?php echo $blooddata['0']['id'];?>">
    <select class="form-control" name="groupe" id="exampleFormControlSelect1">
      <option value="<?php echo $blooddata[0]['Groupe']; ?>"><?php echo $blooddata[0]['Groupe']; ?></option>
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="O">O</option>
      <option value="AB">AB</option>
    </select>
            </div>


            <div class="form-group">
                <label for="name">Rhesus</label>
                <input type="text" name="rhesus"  class="form-control"  value="<?php echo $blooddata[0]['rhesus']; ?>">
            </div>







        </div>

        <div class="col-md-6">

            <div class="form-group">

                <input type="submit" class="form-control btn btn-primary" value="Mettre à Jour">
            </div>
            
        </div>


    </form>

