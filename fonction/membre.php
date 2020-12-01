
  <h3><u>Liste des membres</u></h3>

    </br>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Ajouter un membre
    </button>
    <br><br>
    <a class="btn btn-success btn-sm" title="Actualiser" onclick="afficher_membre()" ><span class="glyphicon glyphicon-refresh" aria-hidden="true" ></span></a>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Ajout de membre</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body" style="height:500px">

        <br><br>
        <form method="POST" action="fonction/addcontact.php" class="form_membre" id="myform" style="margin-top:-50px">
          <div class="form-group">

              <label for="nom" class="col-lg-3 control-label" >Nom</label>

              <div class="col-lg-9">
                <input  type="text" name="nom" class="form-control" id="nom" placeholder="Saisissez votre nom" required>
              </div>
          </div>

          <br><br>

          <div class="form-group">

            <label for="prenom" class="col-lg-3 control-label" >Prénom</label>

            <div class="col-lg-9">
              <input  type="text" name="prenom" class="form-control" id="prenom" placeholder="Saisissez votre prenom" required>
            </div>

          </div>
            <br>
          <div class="form-group">

            <label for="tel" class="col-lg-3 control-label" >Télephone</label>

            <div class="col-lg-9">
              <input  type="text" pattern="0[1-9][0-9]{8}" name="tel" class="form-control" id="tel" title="Téléphone Invalide" placeholder="Saisissez votre contact" required>
            </div>

          </div>

          <div class="form-group">

            <label for="prenom" class="col-lg-3 control-label" >Poste</label>

            <div class="col-lg-9">
              <input  type="text" name="poste" class="form-control" id="poste" placeholder="Saisissez votre poste actuel" required>
            </div>

          </div>

          <div class="form-group">

                    <label for="telephone" class="col-lg-4 control-label">Entreprise:</label>

                    <div class="col-lg-8">

                  <?php
            				$connection = new MongoClient();
            				$db = $connection->carnet;
                    $objet=$db->entreprise->find();
                    ?>
                    <select class="form-control" name="ident"  id="ident"required>
                    <option value="">Séléctionnez votre entreprise</option>
                    <?php
            			foreach ($objet as $row) {
            		echo $row['noment'];
                  ?>
                <option value="<?php echo $row['_id']; ?>"><?php echo $row['noment']; ?></option>

                <?php

                                            }
                      ?>
                      </select>
                    </div>
            </div>

    </div>



    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      <button type="submit" class="btn btn-primary">Enregistrer</button>
    </div>
    </form>
    </div>
    </div>
    </div>
    <br><br>
    <div id="viewmembre"></div>
