
<?php


if ($_POST) {
$connection = new MongoClient();
$db = $connection->carnet;
	$rec['nom'] = htmlspecialchars(addslashes($_POST['nom']));
	$rec['prenom'] = htmlspecialchars(addslashes($_POST['prenom']));
	$rec['ident'] = htmlspecialchars(addslashes($_POST['ident']));
	$rec['tel'] = htmlspecialchars(addslashes($_POST['tel']));
		$rec['poste'] = htmlspecialchars(addslashes($_POST['poste']));

	$db->membre->insert($rec);

	echo "Données insérées avec succès";

}
?>
