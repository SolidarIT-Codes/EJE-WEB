

    <div class="card">
        <h3>Modification</h3>
    </div>


    <form action="<?php echo site_url('blood/updateblood'); ?>" method="post" style=" margin:  0 auto;">

        <div class="col-md-6">

            <div class="form-group">
                <label for="name">Groupe</label>
                <input type="hidden" name="id" value="<?php echo $blooddata['0']['id'];?>">
                <input type="text" name="groupe" class="form-control" readonly value="<?php echo $blooddata[0]['groupe']; ?>">
            </div>


            <div class="form-group">
                <label for="name">Rhesus</label>
                <input type="text" name="rhesus"  class="form-control" readonly value="<?php echo $blooddata[0]['rhesus']; ?>">
            </div>

            <div class="form-group">
                <label for="name">Quantite</label>
                <input type="number" name="quantite"  class="form-control" value="<?php echo $blooddata[0]['quantite']; ?>">
            </div>






        </div>

        <div class="col-md-6">

            <div class="form-group">

                <input type="submit" class="form-control btn btn-primary" value="Mettre à Jour">
            </div>
            
        </div>


    </form>


<a href="<?php echo site_url("Home"); ?>" class="btn btn-primary">Retour</a>