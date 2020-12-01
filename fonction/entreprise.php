
  <h3><u>Liste des entreprises</u></h3>

    </br>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Ajouter une entreprise
    </button>
    <br><br>
    <a class="btn btn-success btn-sm" onclick="afficher_entreprise()" ><span class="glyphicon glyphicon-refresh" aria-hidden="true" ></span></a>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Ajout d'une entreprise</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body" style="height:500px">

        <br><br>
        <form method="POST" action="fonction/addentreprise.php" class="form_entreprise" id="myforment" style="margin-top:-30px">
          <div class="form-group">

              <label for="nom" class="col-lg-3 control-label" >Nom</label>

              <div class="col-lg-9">
                <input  type="text" name="noment" class="form-control" id="noment" placeholder="Saisissez le nom de l'entreprise" required>
              </div>
          </div>

          <br><br>

          <div class="form-group">

            <label for="ville" class="col-lg-3 control-label" >Ville</label>

            <div class="col-lg-9">
              <input  type="text" name="vilent" class="form-control" id="vilent" placeholder="Saisissez le ville" required>
            </div>

          </div>
            <br>
          <div class="form-group">

            <label for="tel" class="col-lg-3 control-label" >Code postal</label>

            <div class="col-lg-9">
              <input  type="text"
              pattern="^[0-9]{5}$"
               name="codpost" class="form-control" id="codpost" placeholder="Saisissez le code postal" required>
            </div>

          </div>


            <br>
          <div class="form-group">

            <label for="tel" class="col-lg-3 control-label" >Télephone</label>

            <div class="col-lg-9">
              <input  type="text"
            pattern="0[1-9][0-9]{8}"
               name="telent" class="form-control" id="telent" placeholder="Saisissez le contact de l'entreprise" title="Téléphone Invalide" required>
            </div>

          </div>


    </div>



    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      <button type="submit" class="btn btn-primary confirm">Enregistrer</button>
    </div>
    </form>
    </div>
    </div>
    </div>
    <br><br>
    <div id="viewentreprise"></div>
