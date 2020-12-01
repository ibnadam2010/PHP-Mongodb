
<?php



if ($_GET['id']) {
$connection = new MongoClient();
$db = $connection->carnet;
$id = new MongoId($_GET['id']);


//$db->membre->remove( array('ident' =>$_GET['id'] ),true );
$query = array('ident'=>$_GET['id']);
echo $query["ident"];
$cursor= $db->membre->find($query);
var_dump($cursor->count());

foreach($cursor as $doc){
  var_dump($doc);
  $idmembre = new MongoId($doc['_id']);
  $db->membre->remove( array('_id' =>$idmembre ) );
}

$db->entreprise->remove( array('_id' =>$id ) );

}
?>
