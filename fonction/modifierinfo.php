
<?php



if ($_POST) {
$connection = new MongoClient();
$db = $connection->carnet;
$id = new MongoId($_POST['id']);

$db->membre->update(

	 array('_id' =>$id ),
	 array(
		 '$set'=> array(
			 'nom'=>$_POST["nom"],
			 'prenom'=>$_POST["prenom"],
			 'ident'=>$_POST["newident"],
			 'tel'=>$_POST["tel"],
			 'poste'=>$_POST["poste"]

		 )
	 )

);
echo "Ligne modifiée avec succès";

}

?>
