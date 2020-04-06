

    <div class="card">
        <h3>Modification</h3>
    </div>


    <form action="<?php echo site_url('user/updateuser'); ?>" method="post" style=" margin:  0 auto;">

        <div class="col-md-6">

            <div class="form-group">
                <label for="name">Groupe</label>
                <input type="hidden" name="id" value="<?php echo $userdata['0']['id'];?>">
                <input type="text" name="name" class="form-control" value="<?php echo $userdata[0]['groupe']; ?>">
            </div>


            <div class="form-group">
                <label for="name">Rhesus</label>
                <input type="text" name="email"  class="form-control" value="<?php echo $userdata[0]['rhesus']; ?>">
            </div>

            <div class="form-group">
                <label for="name">Quantite</label>
                <input type="text" name="address"  class="form-control" value="<?php echo $userdata[0]['quantite']; ?>">
            </div>






        </div>

        <div class="col-md-6">

            <div class="form-group">

                <input type="submit" class="form-control btn btn-primary" value="Update">
            </div>
            
        </div>


    </form>


<a href="<?php echo site_url("Home"); ?>" class="btn btn-primary">Back</a>