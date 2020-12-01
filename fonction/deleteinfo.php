
<?php



if ($_GET['id']) {
$connection = new MongoClient();
$db = $connection->carnet;
$id = new MongoId($_GET['id']);
$db->membre->remove( array('_id' =>$id ) );
}
?>
