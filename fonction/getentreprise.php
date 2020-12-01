<html>
<head>

</head>
<body>


<table class="footable" data-page-size ="6">
		<thead>
			<th data-toggle="true">Nom</th>
			<th data-hide="phone">Ville</th>
      	<th data-hide="phone">Téléphone</th>
				<th data-hide="phone">Code postal</th>
			<th data-hide="phone,tablet">Modifier/Supprimer</th>
		</thead>
		<tbody>
			<?php
				$connection = new MongoClient();
				$db = $connection->carnet;
        $objet=$db->entreprise->find();
			foreach ($objet as $row) {
					?>

					<tr>
						<td><?php echo $row['noment']; ?></td>
						<td><?php echo $row['vilent']; ?></td>
            <td><?php echo $row['telent']; ?></td>
						<td><?php echo $row['codpost']; ?></td>

						<td>
							<a class="btn btn-warning btn-sm" data-toggle = "modal"    data-target = "#myModal<?php echo $row['_id']; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true" ></span></a>
							<a class="btn btn-danger btn-sm confirm"  onclick="deleteent('<?php echo $row['_id']; ?>')" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

		<div class = "modal fade modalremove" id = "myModal<?php echo $row['_id']; ?>" tabindex = "-1" role = "dialog"
					aria-labelledby = "myModalLabel<?php echo $row['_id']; ?>" aria-hidden = "true">
					<div class = "modal-dialog">
					<div class = "modal-content">
					<div class = "modal-header">
						 <button type = "button" class = "close" data-dismiss = "modal"
					aria-label ="close"><span aria-hidden="true">&times;</span></button>
					<h4 class = "modal-title" id = "myModalLabel<?php echo $row['_id']; ?>" >Modifier l'entreprise</h4>
					</div>


					<div class = "modal-body" style="height:500px">

				<form method="POST" class="modifier" >
          <div class="form-group">

              <label for="nom" class="col-lg-3 control-label" >Nom</label>

              <div class="col-lg-9">
                <input  type="text" name="noment" class="form-control" id="noment<?php echo $row['_id']; ?>" value="<?php echo $row['noment'] ?>" required>
              </div>
          </div><br><br><br>

          <div class="form-group">

              <label for="ville" class="col-lg-3 control-label" >Ville</label>

              <div class="col-lg-9">
                <input  type="text" name="vilent" class="form-control" id="vilent<?php echo $row['_id']; ?>" value="<?php echo $row['vilent'] ?>" required>
              </div>
          </div>


          <div class="form-group">

              <label for="ville" class="col-lg-3 control-label" >Téléphone</label>

              <div class="col-lg-9">
                <input  type="text"   pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$"
								title="Téléphone Invalide" name="telent" class="form-control" id="telent<?php echo $row['_id']; ?>" value="<?php echo $row['telent'] ?>" required>
              </div>
          </div>

					<div class="form-group">

							<label for="prenom" class="col-lg-3 control-label" >Code postal</label>

							<div class="col-lg-9">
								<input  type="text" pattern="^[0-9]{5}$" name="codpost" class="form-control" id="codpost<?php echo $row['_id']; ?>" value="<?php echo $row['codpost'] ?>" required>
							</div>
					</div>


  <input  type="hidden" name="id" class="form-control" id="id"  value="<?php echo $row['_id'] ?>" required>

           					 <div class="reponse" id= "rep" style="display:none;"></div>

				  </div>




					<div class = "modal-footer">
						 <button type = "button" class = "btn btn-default"
					data-dismiss = "modal" >Fermer</button>
					   <button type = "submit" onclick="modifierentreprise('<?php echo $row['_id']; ?>')" class ="btn btn-primary">Modifier</button>
					</div>
					</form>
					</div>
					</div>
					</div>






						</td>
					</tr>

<?php
				}

              ?>

		</tbody>


    		<tfoot class = "hide-if-no-paging">
    				<td colspan="5">

    						<div class = "pagination">

    						</div>

    				</td>

    		</tfoot>
</table>

<script type="text/javascript">
	$(".footable").footable();
</script>

</body>


</html
