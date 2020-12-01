<div id="resultat">
<?php
if(isset($_GET['id'])){
  $connection = new MongoClient();
  $db = $connection->carnet;
  $id = new MongoId($_GET['id']);
  $article = $db->entreprise->findOne(array('_id' => new MongoId($id)));
 $nom = $article['noment'];
  $vil = $article['vilent'];
  $codpost = $article['codpost'];
  $tel = $article['telent'];
?>
<div class="col-md-4">
</div>
<div class="col-md-4">
      <ul class="list-group">

              <li class="list-group-item d-flex justify-content-between align-items-center" >
                  <center><h4>  <?php echo $nom; ?> </h4></center>
                  <span id="info" class="badge badge-primary badge-pill"></span>
              </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
              <b> Siège</b>
                <span id="en_metre" class="badge badge-primary badge-pill" style="background:blue"> <?php echo $vil; ?> </span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
              <b> Code Postal </b>
                <span id="duree_min" class="badge badge-primary badge-pill" style="background:blue"><?php echo $codpost; ?></span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
              <b> Téléphone </b>
                <span id="duree_min" class="badge badge-primary badge-pill" style="background:blue"><?php echo $tel; ?></span>
            </li>

      </ul>
  </div >
  <div class="col-md-4">
  </div >
</div>
 <?php
}
?>
