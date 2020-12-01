<html>
<head>

</head>
<body>

	<div class="form-group">
			<div class = "input-group">
			<span class = "input-group-addon"><b>Recherche</b></span>
			<input type="text" id ="filter" name = "prenom" class="form-control" placeholder="entrer le mot clé"/>
			</div>
	</div>

<table class="footable" data-page-size ="6" data-filter="#filter">
		<thead>
			<th data-toggle="true">Nom</th>
			<th data-hide="phone">Prenom</th>
			<th data-hide="phone">Téléphone</th>
			  <th data-hide="phone">Poste</th>
			<th data-hide="phone">Entreprise</th>
      <th data-hide="phone">Détails entreprise</th>
		</thead>
		<tbody>
			<?php
				$connection = new MongoClient();
				$db =$connection->carnet;
        $objet= $db->membre->find();
			foreach ($objet as $row) {
				$idt = $row['ident'];
				$article = $db->entreprise->findOne(array('_id' => new MongoId($idt)));
					?>

					<tr>
						<td><?php echo $row['nom']; ?></td>
						<td><?php echo $row['prenom']; ?></td>
						<td><?php echo $row['tel']; ?></td>
						  <td><?php echo $row['poste']; ?></td>
						<td><?php echo $article['noment']; ?></td>
            <td>
	<a class="btn btn-primary btn-sm confirm"  onclick="detail('<?php echo $article['_id']; ?>')" ><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
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
