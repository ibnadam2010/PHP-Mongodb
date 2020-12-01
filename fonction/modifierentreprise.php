
<?php



if ($_POST) {
$connection = new MongoClient();
$db = $connection->carnet;
$id = new MongoId($_POST['id']);

$db->entreprise->update(

	 array('_id' =>$id ),
	 array(
		 '$set'=> array(
			 'noment'=>$_POST["noment"],
			 'vilent'=>$_POST["vilent"],
       'codpost'=>$_POST["codpost"],
			 'telent'=>$_POST["telent"]
		 )
	 )

);
echo "Ligne modifiée avec succès";

}
?>
