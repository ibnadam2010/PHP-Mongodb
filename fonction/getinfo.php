<html>
<head>

</head>
<body>


<table class="footable" data-page-size ="6">
		<thead>
			<th data-toggle="true">Nom</th>
			<th data-hide="phone">Prenom</th>
				<th data-hide="phone">Téléphone</th>
				<th data-hide="phone">Poste</th>
					<th data-hide="phone">Entreprise</th>
			<th data-hide="phone,tablet">Modifier/Supprimer</th>
		</thead>
		<tbody>
			<?php
				$connection = new MongoClient();
				$db =$connection->carnet;
        $objet= $db->membre->find();
			foreach ($objet as $row) {
					?>

					<tr>
						<td><?php echo $row['nom']; ?></td>
						<td><?php echo $row['prenom']; ?></td>
						<td><?php echo $row['tel']; ?></td>
						<td><?php echo $row['poste']; ?></td>
						<td>

						<?php
    //pour chaque ligne on se sert de la cle etrangère provennant de la collection entreprise pour recuperer le nom de la ville

						$idt = $row['ident'];
						$article = $db->entreprise->findOne(array('_id' => new MongoId($idt)));
						echo $article['noment'];

						?>

					  </td>

						<td>
							<a class="btn btn-warning btn-sm" data-toggle = "modal"    data-target = "#myModal<?php echo $row['_id']; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true" ></span></a>
							<a class="btn btn-danger btn-sm confirm"  onclick="deleteinfo('<?php echo $row['_id']; ?>')" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

		<div class = "modal fade modalremove" id = "myModal<?php echo $row['_id']; ?>" tabindex = "-1" role = "dialog"
					aria-labelledby = "myModalLabel<?php echo $row['_id']; ?>" aria-hidden = "true">
					<div class = "modal-dialog">
					<div class = "modal-content">
					<div class = "modal-header">
						 <button type = "button" class = "close" data-dismiss = "modal"
					aria-label ="close"><span aria-hidden="true">&times;</span></button>
					<h4 class = "modal-title" id = "myModalLabel<?php echo $row['_id']; ?>" >Modifier le membre</h4>
					</div>


					<div class = "modal-body" style="height:500px">

				<form method="POST" class="modifier" >
          <div class="form-group">

              <label for="nom" class="col-lg-3 control-label" >Nom</label>

              <div class="col-lg-9">
                <input  type="text" name="nom" class="form-control" id="nom<?php echo $row['_id']; ?>" value="<?php echo $row['nom']; ?>" required>
              </div>
          </div><br><br>

          <div class="form-group">

              <label for="prenom" class="col-lg-3 control-label" >Prénom</label>

              <div class="col-lg-9">
                <input  type="text" name="prenom" class="form-control" id="prenom<?php echo $row['_id']; ?>" value="<?php echo $row['prenom']; ?>" required>
              </div>
          </div><br><br>

					<div class="form-group">

							<label for="prenom" class="col-lg-3 control-label" >Téléphone</label>

							<div class="col-lg-9">
								<input  type="tel" name="tel"   pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$"
								title="Téléphone Invalide" class="form-control" id="tel<?php echo $row['_id']; ?>" value="<?php echo $row['tel']; ?>" required>
							</div>
					</div><br><br>




					          <div class="form-group">

					              <label for="poste" class="col-lg-3 control-label" >Poste</label>

					              <div class="col-lg-9">
					                <input  type="text" name="poste" class="form-control" id="poste<?php echo $row['_id']; ?>" value="<?php echo $row['poste']; ?>" required>
					              </div>
					          </div><br><br>


					<div class="form-group">

										<label for="telephone" class="col-lg-4 control-label">Entreprise:</label>

										<div class="col-lg-8">
										<select class="form-control" name="newident"  id="newident<?php echo $row['_id']; ?>" required>
										<option value="<?php echo $row['ident']; ?>"><?php echo $article['noment']; ?></option>
										<?php
										$vil = $db->entreprise->find();
									foreach ($vil as $rest) {

									?>

								<option value="<?php echo $rest['_id']; ?>"><?php echo $rest['noment']; ?></option>

								<?php

																						}
											?>
											</select>
										</div>
						</div>




  <input  type="hidden" name="id" class="form-control"  value="<?php echo $row['_id'] ?>" required>

           					 <div class="reponse" id= "rep" style="display:none;"></div>

				  </div>




					<div class = "modal-footer">
						 <button type = "button" class = "btn btn-default"
					data-dismiss = "modal" >Fermer</button>
					   <button type = "submit" onclick="modifierinfo('<?php echo $row['_id']; ?>')" class ="btn btn-primary">Modifier</button>
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
    				<td colspan="6">

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
