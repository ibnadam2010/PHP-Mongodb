
<?php


if ($_POST) {
$connection = new MongoClient();
$db = $connection->carnet;
	$rec['noment'] = htmlspecialchars(addslashes($_POST['noment']));
	$rec['vilent'] = htmlspecialchars(addslashes($_POST['vilent']));
	$rec['codpost'] = htmlspecialchars(addslashes($_POST['codpost']));
  $rec['telent'] = htmlspecialchars(addslashes($_POST['telent']));

	$db->entreprise->insert($rec);

	echo "Données insérées avec succès";

}
?>
