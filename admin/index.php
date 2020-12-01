<?php
include('../fonction/connexion.php');
session_start();
if (isset($_GET['user'])) {
  $user = $_GET['user'];
if (isset($_SESSION['session'])) {
if($_SESSION['session']==1) {
?>
<!doctype html>
<html>
<input type = "hidden" name="userforum" id="userforum" value="<?php echo$user.'istrateur'.' '.'du club des rois'; ?>">
<head>
<title>Administrateur Club des rois</title>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../plugin/bootsnipp.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="../jquery-ui.css">
<link rel="icon" href="../images/fait85.ico" />
<link rel="stylesheet" href="3Dtrans.css">
<script src="../plugin/jquery-ui.js"></script>


<script src="../plugin/jquery.js"></script>
	<script src="../plugin/notify.js"></script>
<script src="../plugin/tweenmax.js"></script>
<script src="../plugin/tweenlite.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../plugin/jquery.confirm.js"></script>
<script type="text/javascript" src="../plugin/jquery.confirm.min.js"></script>
 <script>
        if (!window.jQuery) { document.write('<script src="../jquery.js"><\/script>'); }
    </script>
    <script src="footable/js/footable.js?v=2-0-1" type="text/javascript"></script>
  <script src="js/bootstrap-tab.js" type="text/javascript"></script>
    <script src="js/demos.js" type="text/javascript"></script>
	<script src="ajaxform.js" type="text/javascript"></script>
<link href="footable/css/footable.core.css?v=2-0-1" rel="stylesheet" type="text/css"/>
    <link href="footable/demos/css/footable-demos.css" rel="stylesheet" type="text/css"/>
	<style type="text/css">
	
			.loader{
			position: absolute;
			width:97%;
			height:50%;
			background: url("loader.gif")  #F3E7D1 no-repeat center;
			
		}

	
	</style>
</head>
<body style="padding:0;" onload="afficher_info();afficher_presentation();afficher_actualite();afficher_message();afficher_bar();afficher_menu();afficher_textfete();afficher_textdetente();
afficher_textjeu();afficher_event();afficher_msgrestau();afficher_galleriemodule();afficher_grandegallerie();afficher_gallerierestau();afficher_admin();afficher_clubhomegallerie();
afficher_clubactu();afficher_star();afficher_clubevent();afficher_clubmedia();afficher_clubmenu();">
		<nav class="navbar navbar-inverse navbar-fixed-top" style="background:#fe9900">
			<div class="container">
			
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" >
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						  
					</div>
					
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
																	<li class="active"><a href="index.php?user=<?php echo$user; ?>">Admin</a></li>
									<li class="dropdown"   >
											  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white;font-family:bauhaus">Gestion de la page d'accueil<span class="caret"></span></a>
											  <ul class="dropdown-menu"  style="background:#fe9900 url(../img/bg.png);">
												<li ><a href="?user=<?php echo$user; ?>&commande=gallery" style="color:white;font-family:bauhaus">Gallery photo</a></li>
												<li role="separator" class="divider"></li>
												<li><a href="?user=<?php echo$user; ?>&commande=presentation" style="color:white;font-family:bauhaus">Présentation</a></li>									   
										  </ul>
										</li>
									<li><a href="?user=<?php echo$user; ?>&commande=gevent" style="color:white;font-family:bauhaus">Gestion des événements</a></li>
									<li><a href="?user=<?php echo$user; ?>&commande=gband" style="color:white;font-family:bauhaus">Gestion du bar</a></li>
						
									<li><a href="?user=<?php echo$user; ?>&commande=gphototheque" style="color:white;font-family:bauhaus">Gestion de la restauration</a></li>
									<li><a href="?user=<?php echo$user; ?>&commande=video" style="color:white;font-family:bauhaus">Gestion des vidéos</a></li>
									<li><a href="?user=<?php echo$user; ?>&commande=gdivertissement" style="color:white;font-family:bauhaus">Divertissement & repos</a></li>
											<li class="dropdown"   >
											  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white;font-family:bauhaus">Gestion du Club<span class="caret"></span></a>
											  <ul class="dropdown-menu"  style="background:#fe9900 url(../img/bg.png);">
												<li ><a href="?user=<?php echo$user; ?>&commande=gclub" style="color:white;font-family:bauhaus">Accueil</a></li>
												<li role="separator" class="divider"></li>
												<li><a href="?user=<?php echo$user; ?>&commande=evenement" style="color:white;font-family:bauhaus">Evenement</a></li>		
												<li><a href="?user=<?php echo$user; ?>&commande=media" style="color:white;font-family:bauhaus">Mediathèque</a></li>		
											<li><a href="?user=<?php echo$user; ?>&commande=menu" style="color:white;font-family:bauhaus">Menu</a></li>														
										  </ul>
										</li>
							
							</ul>
							
							<ul class="nav navbar-nav navbar-right">
									<li ><a href="#" style="color:#000032;font-family:bauhaus">Bienvenue, <?php echo $user; ?></a></li>
									<li><span class="glyphicon glyphicon-off" aria-hidden="true" style="position:absolute;margin-top:15px;color:white;"></span><a href="../fonction/deconnexion.php" style="color:white">Déconnexion</a></li>
							</ul>
							
					</div>
			</div>
		</nav>
		
		<header id="header" style="background:#2f93cd url(../img/bg.png);margin-top:100px">
				<div class="container">
						<div class="row">
								<div class="col-md-10">
									<h1><span class="glyphicon glyphicon-cog" aria-hidden="true" >Administration<small style="color:white;font-family:bauhaus"> espace de gestion du site web</small></h1>
								</div>
								
								<div class="col-md-2">
								
								</div>
						</div>
				</div>
		</header>
		
		<section id="breadcrumb">
			
			<div class="container">
			
				<ol class="breadcrumb" style="background:#cccccc">
				<center>
					<li class="active"><h3>Le club des rois</h3></li>
				</center>
				</ol>
			
			</div>
		
		</section>
		
		<section id="main">
			<div class="container">
			
				<div class="row">
				
					<div class="col-md-3" >
					<div class="wrapper" style="padding:0">
								<div class="panel panel-default">
									<div class="panel-heading" rol="tab" id="heading" style="background:#fe9900 url(../img/bg.png;">
										<h5 class="panel-title">
											<a href="#collapseone" class="collapsed" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="collapseone" style="color:white">
											Gestion de la page accueil
											</a>
										</h5>
									
									</div>
									
									<div id="collapseone" class="panel-collapse collapse" rol="tabpanel" aria-labelledby="heading">
											<div class="panel-body" style="background:#fe9900 url(../img/bg.png">
											<li ><a href="?user=<?php echo$user; ?>&commande=gallery" style="color:white">Gallery photo</a></li>
											<li ><a href="?user=<?php echo$user; ?>&commande=presentation" style="color:white">Présentation</a></li>
											<li ><a href="?user=<?php echo$user; ?>&commande=bandeau" style="color:white">bandeau défilant</a></li>
											<li ><a href="?user=<?php echo$user; ?>&commande=actu" style="color:white">Actualité</a></li>
											<li ><a href="?user=<?php echo$user; ?>&commande=mot" style="color:white">Mot du promoteur</a></li>
											
											</div>
									</div>
											<div class="list-group" >
							<a href="?user=<?php echo$user; ?>&commande=gevent" class="list-group-item " style="background:#fe9900 url(../img/bg.png);color:white"><b>Gestion des événements</b></a>
							<a href="?user=<?php echo$user; ?>&commande=gband" class="list-group-item" style="background:#fe9900 url(../img/bg.png);color:white"><b>Gestion de la gallerie bar</b></a>
							<a href="?user=<?php echo$user; ?>&commande=restau" class="list-group-item" style="background:#fe9900 url(../img/bg.png);color:white"><b>Gestion du restau</b></a>
	
				
							<a href="?user=<?php echo$user; ?>&commande=gdivertissement" class="list-group-item" style="background:#fe9900 url(../img/bg.png);color:white"><b>Divertissement & repos</b></a>
						
						<a href="?user=<?php echo$user; ?>&commande=video" class="list-group-item" style="background:#fe9900 url(../img/bg.png);color:white"><b>Gestion des vidéos</b></a>
						</div>
								</div>
						</div>
				
					</div>
					
					<div class="col-md-9">
					<div class="container">
					
					<?php 
					
					if (isset($_GET['commande'])){
						
						$action = $_GET['commande'];
						 
						 if($action == "video"){
							 ?>
							 <h2>Gestion des vidéos</h2>
							 
							    <button type ="button" class = "btn btn-large" data-toggle = "modal"    data-target = "#myModalad" style="background:#000 url(../img/bg.png);color:white">
     <span class="glyphicon glyphicon-plus"></span>    <b>Ajouter</b>
          </button>
     <div class = "modal fade" id = "myModalad" tabindex = "-1" role = "dialog"
          aria-labelledby = "myModalLabe" aria-hidden = "true">
             <div class = "modal-dialog">

                  <div class = "modal-content">
                       <div class = "modal-header">
                            <button type = "button" class = "close" data-dismiss = "modal"
                            aria-label ="close"><span aria-hidden="true">&times;</span></button>
                            <h2 class = "modal-title" id = "myModalLabe" >Ajout d'une image</h2>
                       </div>


                        <div class = "modal-body">
                            <form method="POST" action="../fonction/addvideo.php" class="form_video" enctype="multipart/form-data">

					<div class="form-group">
								
										<label for="telephone" class="col-lg-4 control-label">Vidéo pour:</label>
										
										<div class="col-lg-8">
									<select class="form-control" name="module" required>
									<option value="">Séléctionnez le module</option>
									<option value="bodemer">Bordemer</option>
									<option value="club">Night club</option>
									</select>
										</div>
						</div>
     
			<div class="form-group">
								
								<input type ="file" name = "photo" class = "form-control" required>
				</div><br><br><br>

          
                            
                  <div class="reponse" id= "rep" style="display:none;"></div>


                        </div>

                        <div class = "modal-footer">
                       <button type = "button" class = "btn btn-default"
                    data-dismiss = "modal">Fermer</button>
                       <button type = "submit" id="save_user" class ="btn btn-primary">Enregistrer</button>
                       <button type = "reset" class ="btn btn-primary" >Nouveau</button>
                        </div>
                        </form>
                        </div>


             </div>

      </div>
          
           <br><br>
<div id="viewvideo"></div>


							 <?php
						 }elseif
						 ($action == "gallery"){
							?>
							
													
   <h2>Gestion des images de la gallerie d'accueil et de la photothèque</h2>  
   <button type ="button" class = "btn btn-large" data-toggle = "modal"    data-target = "#myModaladd" style="background:blue;color:white;">
     <span class="glyphicon glyphicon-plus"></span>    <b>Ajouter une image</b>
          </button>
     <div class = "modal fade" id = "myModaladd" tabindex = "-1" role = "dialog"
          aria-labelledby = "myModalLabel" aria-hidden = "true">
             <div class = "modal-dialog">

                  <div class = "modal-content">
                       <div class = "modal-header">
                            <button type = "button" class = "close" data-dismiss = "modal"
                            aria-label ="close"><span aria-hidden="true">&times;</span></button>
                            <h2 class = "modal-title" id = "myModalLabel" >Jointure d'image gallerie accueil/phototheque</h2>
                       </div>


                        <div class = "modal-body">
                            <form method="POST" action="../fonction/addgrandegallerie.php" class="form_grandegallerie" >

					<div class="form-group">
								
										<label for="telephone" class="col-lg-4 control-label">Image pour:</label>
										
										<div class="col-lg-8">
									<select class="form-control" name="grandegallerie" required>
									<option value="">Séléctionnez le module</option>
									<option value="accueil">Gallerié accueil</option>
									<option value="phototheque">Gallerie phototheque</option>
									</select>
										</div>
						</div>
     
			<div class="form-group">
								
									<input type="file" name ="photo" class="form-control" required>
				</div><br><br><br>

          
                            
                  <div class="reponse" id= "rep" style="display:none;"></div>


                        </div>

                        <div class = "modal-footer">
                       <button type = "button" class = "btn btn-default"
                    data-dismiss = "modal">Fermer</button>
                       <button type = "submit" id="save_user" class ="btn btn-primary">Ajouter</button>
                        </div>
                        </form>
                        </div>


             </div>

      </div>
          
           <br><br>
<div id="viewgrandegallerie"></div>
</div>
						
						
							
							
							
							<?php
						 }elseif($action =="imgevent"){
							 $id = $_GET['ideven'];
							?>
							<h2>Ajouter une image à cet événement</h2>
							
							<form method="POST" action="../fonction/addimgevent.php" class="form_imgevent">
							<input type="hidden" value="<?php echo$id; ?>" name="idevent">
							<input type="file" name="photo">
							<input type="submit"  value="valider">
							</form><br><br>
							<a href="?user=<?php echo$user;?>&commande=gevent">Retour</a>
							
							
							<?php
						 }elseif($action == "media")
						 {
							 ?>
							 
							 
						<h2>Photo médiathèque</h2>	 
							 
							   <button type ="button" class = "btn btn-large" data-toggle = "modal"    data-target = "#myModalad" style="background:#000 url(../img/bg.png);color:white">
     <span class="glyphicon glyphicon-plus"></span>    <b>Ajouter</b>
          </button>
     <div class = "modal fade" id = "myModalad" tabindex = "-1" role = "dialog"
          aria-labelledby = "myModalLabe" aria-hidden = "true">
             <div class = "modal-dialog">

                  <div class = "modal-content">
                       <div class = "modal-header">
                            <button type = "button" class = "close" data-dismiss = "modal"
                            aria-label ="close"><span aria-hidden="true">&times;</span></button>
                            <h2 class = "modal-title" id = "myModalLabe" >Ajout d'une image</h2>
                       </div>


                        <div class = "modal-body">
                            <form method="POST" action="../fonction/addclubmedia.php" class="form_clubmedia" >


     
			<div class="form-group">
								
								<input type ="file" name = "photo" class = "form-control" required>
				</div><br><br><br>

          
                            
                  <div class="reponse" id= "rep" style="display:none;"></div>


                        </div>

                        <div class = "modal-footer">
                       <button type = "button" class = "btn btn-default"
                    data-dismiss = "modal">Fermer</button>
                       <button type = "submit" id="save_user" class ="btn btn-primary">Enregistrer</button>
                       <button type = "reset" class ="btn btn-primary" >Nouveau</button>
                        </div>
                        </form>
                        </div>


             </div>

      </div>
          
           <br><br>
<div id="viewclubmedia"></div>

							 
							 
							 
							 <?php
							 
						 }
						 elseif($action =="evenement")
						 {
							 ?>
							 
							 
					<h2>Gestion des événements du club</h2>		 
							 
							 	
		 <button type ="button" class = "btn btn-large" data-toggle = "modal"    data-target = "#myModaladdmsg" style="background:blue;color:white;">
     <span class="glyphicon glyphicon-plus"></span>    <b>Ajouter</b>
          </button>
     <div class = "modal fade" id = "myModaladdmsg" tabindex = "-1" role = "dialog"
          aria-labelledby = "myModalLabel" aria-hidden = "true">
             <div class = "modal-dialog">

                  <div class = "modal-content">
                       <div class = "modal-header">
                            <button type = "button" class = "close" data-dismiss = "modal"
                            aria-label ="close"><span aria-hidden="true">&times;</span></button>
                            <h2 class = "modal-title" id = "myModalLabel" >Saisie d'un évenement</h2>
                       </div>


                        <div class = "modal-body">
                            <form method="POST" action="../fonction/addclubevent.php" class="form_clubevent" >

			<div class="form-group">
								
										<label for="nom" class="col-lg-3 control-label" >Titre</label>
										
										<div class="col-lg-9">
										<input  type="text" name="titre" class="form-control" id="titre" placeholder="Saisissez le titre de l'actualité" required>
										</div>
								</div>
     
			<div class="form-group">
								
										<label for="message" class="col-lg-2 control-label">Message de l'événement</label>
										
										<div class="col-lg-10">
										<textarea name="msgevent" class="form-control" id="msgevent" placeholder="Entrez le message de l'événement"></textarea>
										</div>
				</div><br><br><br><br>

          
                            
                  <div class="reponse" id= "rep" style="display:none;"></div>


                        </div>

                        <div class = "modal-footer">
                       <button type = "button" class = "btn btn-default"
                    data-dismiss = "modal">Fermer</button>
                       <button type = "submit" id="save_user" class ="btn btn-primary">Enregistrer</button>
                       <button type = "reset" class ="btn btn-primary" >Nouveau</button>
                        </div>
                        </form>
                        </div>


             </div>

      </div>
          
           <br><br>
<div id="viewclubevent"></div>

		
							 
							 
							 
							 
							 <?php
						 }
						 elseif($action =="reservation"){
							?>
							
							
							<h2>Liste des réservations</h2>
							
											<script type="text/javascript" src="footable/js/footable.js"></script>
											<script type="text/javascript" src="footable/js/footable.paginate.js"></script>
											<script type="text/javascript" src="footable/js/footable.filter.js"></script>
											<link rel="stylesheet" type="text/css" href="../admin/footable/css/footable.metro.css">
											
	<br>					
<div class="form-group">
<div class = "input-group">
<span class = "input-group-addon"><b>Recherche</b></span>
<input type="text" id ="filter" name = "prenom" class="form-control" />
</div>
</div>	
<table class="table table-condensed footable table-bordered table-hover" data-filter="#filter" data-page-size ="2" >
		<thead>
			<th data-toggle="true">Nom</th>
			<th data-hide="phone">Email</th>
			<th data-hide="phone">Téléphone</th>
			<th data-hide="phone">Service</th>
			<th data-hide="phone">Nbre personne</th>
			<th data-hide="phone">Arrivé</th>
			<th data-hide="phone">Départ</th>
			<th data-hide="phone">supprimé</th>
		</thead>
		<tbody>
			<?php
				$sql =mysql_query("SELECT * FROM reservation ORDER BY date_reservation ASC") ;
				while ($row = mysql_fetch_array($sql)) {
					?>

					<tr>
						<td>
					<?php echo $row['nom'];?>
						</td>
						<td><?php echo$row['mail']; ?></td>
						<td><?php echo$row['telephone']; ?></td>
						<td><?php echo$row['service']; ?></td>
						<td><?php echo$row['nbre_prs']; ?></td>
						<td><?php echo$row['arrive']; ?></td>
						<td><?php echo$row['depart']; ?></td>
						<td>
						
							
							<a class="btn btn-danger btn-sm confirm"  onclick="deletepresentation(<?php echo $row['idreservation']; ?>)" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
						
						</td>
					</tr>

<?php
				}

              ?>

		</tbody>

		<tfoot class = "hide-if-no-paging">
				<td colspan="8">

						<div class = "pagination">

						</div>

				</td>

		</tfoot>
</table>

<script type="text/javascript">
	$(".footable").footable();
	</script>

						
							 
							 
										</div>
							 </div>
							 
							 
							 
							
							
							
							
							<?php
						 }elseif($action =="presentation"){
							 
							 ?>
									<h2>Gestion de la présentation</h2>  				 
						 <ul class = "nav nav-tabs" role = "tablist">
							<li class = "active" ><a href = "#daftar" style="background:#000 url(../img/bg.png);color:white" role="tab" data-toggle = "tab">Texte de présentation</a></li>
							<li><a href = "#tambah"  style="background:#2f93cd url(../img/bg.png);color:white" role = "tab" data-toggle = "tab">Image de présentation</a></li>
						</ul>


							<!-- tab panes-->
							<div class = "tab-content">
							
							
										<div class = "tab-pane active" id = "daftar">
										<br/>
									
									
									   <button type ="button" class = "btn btn-large" data-toggle = "modal"    data-target = "#myModalpresent" style="background:#000 url(../img/bg.png);color:white">
     <span class="glyphicon glyphicon-plus"></span>    <b>Ajouter</b>
          </button>
     <div class = "modal fade" id = "myModalpresent" tabindex = "-1" role = "dialog"
          aria-labelledby = "myModalLabel" aria-hidden = "true">
             <div class = "modal-dialog">

                  <div class = "modal-content">
                       <div class = "modal-header">
                            <button type = "button" class = "close" data-dismiss = "modal"
                            aria-label ="close"><span aria-hidden="true">&times;</span></button>
                            <h2 class = "modal-title" id = "myModalLabel" >Saisie de la présentation</h2>
                       </div>
									
									<div class = "modal-body">
                            <form method="POST" class="form_presentation" >


     
			<div class="form-group">
								
										<label for="message" class="col-lg-2 control-label">Présentation</label>
										
										<div class="col-lg-10">
										<textarea name="presentation" class="form-control" id="presentation" placeholder="Entrez le texte de la présentation"></textarea>
										</div>
				</div><br><br><br>

          
                            
                  <div class="reponse" id= "rep" style="display:none;"></div>


                        </div>
									
									     <div class = "modal-footer">
                       <button type = "button" class = "btn btn-default"
                    data-dismiss = "modal">Fermer</button>
                       <button type = "submit" id="save_user" class ="btn btn-primary">Enregistrer</button>
                       <button type = "reset" class ="btn btn-primary" >Nouveau</button>
                        </div>
                        </form>
									
									
										</div>
										
	</div>		
</div>	
           <br><br>
<div id="viewpresentation"></div>
</div>
										<div class = "tab-pane" id = "tambah">
										
											<script type="text/javascript" src="footable/js/footable.js"></script>
											<script type="text/javascript" src="footable/js/footable.paginate.js"></script>
											<script type="text/javascript" src="footable/js/footable.filter.js"></script>
											<link rel="stylesheet" type="text/css" href="../admin/footable/css/footable.metro.css">
											
	<br>										
<table class="table table-condensed footable table-bordered table-hover" data-filter="#filter" data-page-size ="4" >
		<thead>
			<th data-toggle="true">Joindre</th>
			<th data-hide="phone">Aperçu</th>
		</thead>
		<tbody>
			<?php
				$sql =mysql_query("SELECT * FROM image_presentation") ;
				while ($row = mysql_fetch_array($sql)) {
					?>

					<tr>
						<td>
						<form method = "POST" action="../fonction/addimgpresentation.php" class="form_imgpresentation" enctype="multipart/form-data" >
						<input type="file" name ="photo" class="form-control">
						<button type="submit" class="btn btn-primary" style="background:#2f93cd  url(../img/bg.png);color:white">Joindre l'image</button>
						</form>
						</td>
						<td><img src="../<?php echo $row['url_img'];?>" id="photo" width="350" height="250"></td>
					</tr>

<?php
				}

              ?>

		</tbody>

		<tfoot class = "hide-if-no-paging">
				<td colspan="4">

						<div class = "pagination">

						</div>

				</td>

		</tfoot>
</table>

<script type="text/javascript">
	$(".footable").footable();
	</script>

						
							 
							 
										</div>
							 </div>
							 
							 
							 
							 <?php
						
						}elseif($action =="bandeau"){
						
						?>
						
							
   <h2>Gestion du bandeau défilant</h2>  
   <button type ="button" class = "btn btn-large" data-toggle = "modal"    data-target = "#myModaladd" style="background:blue;color:white;">
     <span class="glyphicon glyphicon-plus"></span>    <b>Ajouter</b>
          </button>
     <div class = "modal fade" id = "myModaladd" tabindex = "-1" role = "dialog"
          aria-labelledby = "myModalLabel" aria-hidden = "true">
             <div class = "modal-dialog">

                  <div class = "modal-content">
                       <div class = "modal-header">
                            <button type = "button" class = "close" data-dismiss = "modal"
                            aria-label ="close"><span aria-hidden="true">&times;</span></button>
                            <h2 class = "modal-title" id = "myModalLabel" >Saisie de l'infos</h2>
                       </div>


                        <div class = "modal-body">
                            <form method="POST" action="../fonction/adduser.php" class="form_info" >


     
			<div class="form-group">
								
										<label for="message" class="col-lg-2 control-label">Info à défiler</label>
										
										<div class="col-lg-10">
										<textarea name="info" class="form-control" id="info" placeholder="Entrez l'information à faire défiler"></textarea>
										</div>
				</div><br><br><br>

          
                            
                  <div class="reponse" id= "rep" style="display:none;"></div>


                        </div>

                        <div class = "modal-footer">
                       <button type = "button" class = "btn btn-default"
                    data-dismiss = "modal">Fermer</button>
                       <button type = "submit" id="save_user" class ="btn btn-primary">Enregistrer</button>
                       <button type = "reset" class ="btn btn-primary" >Nouveau</button>
                        </div>
                        </form>
                        </div>


             </div>

      </div>
          
           <br><br>
<div id="viewinfo"></div>
</div>
						
						
						<?php
						
						 }elseif($action =="actu"){
							
							?>
							
							
						<h2>Gestion des actualités</h2>  				 
						 <ul class = "nav nav-tabs" role = "tablist">
							<li class = "active" ><a href = "#daftar" style="background:#000 url(../img/bg.png);color:white" role="tab" data-toggle = "tab">Texte de l'actualité</a></li>
						
						</ul>


							<!-- tab panes-->
							<div class = "tab-content">
							
							
										<div class = "tab-pane active" id = "daftar">
										<br/>
									
									
									   <button type ="button" class = "btn btn-large" data-toggle = "modal"    data-target = "#myModalpresent" style="background:#000 url(../img/bg.png);color:white">
     <span class="glyphicon glyphicon-plus"></span>    <b>Ajouter</b>
          </button>
     <div class = "modal fade" id = "myModalpresent" tabindex = "-1" role = "dialog"
          aria-labelledby = "myModalLabel" aria-hidden = "true">
             <div class = "modal-dialog">

                  <div class = "modal-content">
                       <div class = "modal-header">
                            <button type = "button" class = "close" data-dismiss = "modal"
                            aria-label ="close"><span aria-hidden="true">&times;</span></button>
                            <h2 class = "modal-title" id = "myModalLabel" >Saisie d'une actualité</h2>
                       </div>
									
									<div class = "modal-body">
                            <form method="POST" class="form_actualite" >


     
			<div class="form-group">
								
										<label for="message" class="col-lg-2 control-label">Actualité</label>
										
										<div class="col-lg-10">
										<textarea name="actualite" class="form-control" id="actualite" placeholder="Entrez le texte de l'actualité"></textarea>
										</div>
				</div><br><br><br>

          
                            
                  <div class="reponse" id= "rep" style="display:none;"></div>


                        </div>
									
									     <div class = "modal-footer">
                       <button type = "button" class = "btn btn-default"
                    data-dismiss = "modal">Fermer</button>
                       <button type = "submit" id="save_user" class ="btn btn-primary">Enregistrer</button>
                       <button type = "reset" class ="btn btn-primary" >Nouveau</button>
                        </div>
                        </form>
									
									
										</div>
										
	</div>		
</div>	
           <br><br>
<div id="viewactualite"></div>
</div>
										<div class = "tab-pane" id = "tambah">
										
											<script type="text/javascript" src="footable/js/footable.js"></script>
											<script type="text/javascript" src="footable/js/footable.paginate.js"></script>
											<script type="text/javascript" src="footable/js/footable.filter.js"></script>
											<link rel="stylesheet" type="text/css" href="../admin/footable/css/footable.metro.css">
											
	<br>										
<table class="table table-condensed footable table-bordered table-hover" data-filter="#filter" data-page-size ="4" >
		<thead>
			<th data-toggle="true">Joindre</th>
			<th data-hide="phone">Aperçu</th>
		</thead>
		<tbody>
			<?php
				$sql =mysql_query("SELECT * FROM image_presentation") ;
				while ($row = mysql_fetch_array($sql)) {
					?>

					<tr>
						<td>
						<form method = "POST" action="../fonction/addimgactualite.php" class="form_imgactualite" enctype="multipart/form-data" >
						<input type="file" name ="photo" class="form-control">
						<button type="submit" class="btn btn-primary" style="background:#2f93cd  url(../img/bg.png);color:white">Joindre l'image</button>
						</form>
						</td>
						<td><img src="" id="photo" width="350" height="250"></td>
					</tr>

<?php
				}

              ?>

		</tbody>

		<tfoot class = "hide-if-no-paging">
				<td colspan="4">

						<div class = "pagination">

						</div>

				</td>

		</tfoot>
</table>

<script type="text/javascript">
	$(".footable").footable();
	</script>

						
							 
							 
										</div>
							 </div>
							 
							 
						
						

									
							<?php
						 }elseif($action =="restau"){
							?>
						<h2>Gestion du restaurant</h2>	
<ul class = "nav nav-tabs" role = "tablist">
	<li class = "active"><a href = "#daftar" role="tab" data-toggle = "tab" style="background:#000 url(../img/bg.png);color:white">Gestion de la gallerie</a></li>
	<li><a href = "#tamb" role = "tab" data-toggle = "tab" style="background:#2f43cd url(../img/bg.png);color:white">Gestion du message descriptif</a></li>
	<li><a href = "#tambah" role = "tab" data-toggle = "tab" style="background:#2f93cd url(../img/bg.png);color:white">Gestion du menu</a></li>
</ul>


<!-- tab panes-->
<div class = "tab-content">
	<div class = "tab-pane active" id = "daftar">
<br/>
   <button type ="button" class = "btn btn-large" data-toggle = "modal"    data-target = "#myModalad" style="background:#000 url(../img/bg.png);color:white">
     <span class="glyphicon glyphicon-plus"></span>    <b>Ajouter</b>
          </button>
     <div class = "modal fade" id = "myModalad" tabindex = "-1" role = "dialog"
          aria-labelledby = "myModalLabe" aria-hidden = "true">
             <div class = "modal-dialog">

                  <div class = "modal-content">
                       <div class = "modal-header">
                            <button type = "button" class = "close" data-dismiss = "modal"
                            aria-label ="close"><span aria-hidden="true">&times;</span></button>
                            <h2 class = "modal-title" id = "myModalLabe" >Ajout d'une image</h2>
                       </div>


                        <div class = "modal-body">
                            <form method="POST" action="../fonction/addrestaugallerie.php" class="form_restaugallerie" >


     
			<div class="form-group">
								
								<input type ="file" name = "photo" class = "form-control">
								

				</div><br><br><br>
           
                  <div class="reponse" id= "rep" style="display:none;"></div>


                        </div>

                        <div class = "modal-footer">
                       <button type = "button" class = "btn btn-default"
                    data-dismiss = "modal">Fermer</button>
                       <button type = "submit" id="save_user" class ="btn btn-primary">Enregistrer</button>
                       <button type = "reset" class ="btn btn-primary" >Nouveau</button>

                        </div>
                        </form>
						

                        </div>


             </div>

      </div>
          
           <br><br>
<div id="viewrestaugallerie"></div>
</div>
	
	
	
	
	<br>
		<div class = "tab-pane" id = "tambah">
	
	   <button type ="button" class = "btn btn-large" data-toggle = "modal"    data-target = "#myModaladd" style="background:blue;color:white;">
     <span class="glyphicon glyphicon-plus"></span>    <b>Ajouter un menu</b>
          </button>
     <div class = "modal fade" id = "myModaladd" tabindex = "-1" role = "dialog"
          aria-labelledby = "myModalLabel" aria-hidden = "true">
             <div class = "modal-dialog">

                  <div class = "modal-content">
                       <div class = "modal-header">
                            <button type = "button" class = "close" data-dismiss = "modal"
                            aria-label ="close"><span aria-hidden="true">&times;</span></button>
                            <h2 class = "modal-title" id = "myModalLabel" >Saisie de menu</h2>
                       </div>


                        <div class = "modal-body">
                            <form method="POST" action="../fonction/addmenu.php" class="form_menu" >


     
	 <div class="form-group">
								
										<label for="telephone" class="col-lg-2 control-label">Groupe</label>
										
										<div class="col-lg-10">
									<select class="form-control" name="groupe"  id="groupe" required>
									<option value="">Séléctionnez le groupe</option>
									<option value="portion">Accompagnement/Portion</option>
									<option value="aperitif">Apéritifs</option>
									<option value="biere">Bières</option>
									<option value="champagne">Champagnes</option>
									<option value="dessert">Desserts</option>
									<option value="digestif">Digestifs</option>
									<option value="eau">Eau minérale</option>
									<option value="entree">Entrées</option>
									<option value="grillade">Grillades</option>
									<option value="jus">Jus naturels</option>
									<option value="ptitfaim">Petit faim</option>
									<option value="poisson">Poissons</option>
									<option value="sauce">Sauces</option>
									<option value="sirop">Sirop</option>
									<option value="succrerie">Succrérie</option>
									<option value="the">Thé/Café</option>
									<option value="viande">Viande/Volaille</option>
									<option value="pate">Oeufs et Pâte</option>
									</select>
										</div>
		</div>
	 
	 
	 
	 
	 			<div class="form-group">
								
										<label for="nom" class="col-lg-2 control-label" >Prix</label>
										
										<div class="col-lg-10">
										<input  type="text" name="prix" class="form-control" id="prix" placeholder="Saisissez le prix" required>
										</div>
								</div>
	 
	 
			<div class="form-group">
								
										<label for="message" class="col-lg-2 control-label">Intitulé</label>
										
										<div class="col-lg-10">
										<textarea name="intitule" class="form-control" id="intitule" placeholder="Entrez l'intitulé du menu"></textarea>
										</div>
				</div><br><br><br><br><br><br>

          
                            
                  <div class="reponse" id= "rep" style="display:none;"></div>


                        </div>

                        <div class = "modal-footer">
                       <button type = "button" class = "btn btn-default"
                    data-dismiss = "modal">Fermer</button>
                       <button type = "submit" id="save_user" class ="btn btn-primary">Enregistrer</button>
                       <button type = "reset" class ="btn btn-primary" >Nouveau</button>
                        </div>
                        </form>
                        </div>


             </div>

      </div>
          
           <br><br>
<div id="viewmenu"></div>
	
	</div>
	
	
	<div class = "tab-pane" id = "tamb">
		
		
		
		 <button type ="button" class = "btn btn-large" data-toggle = "modal"    data-target = "#myModaladdmsg" style="background:blue;color:white;">
     <span class="glyphicon glyphicon-plus"></span>    <b>Ajouter</b>
          </button>
     <div class = "modal fade" id = "myModaladdmsg" tabindex = "-1" role = "dialog"
          aria-labelledby = "myModalLabel" aria-hidden = "true">
             <div class = "modal-dialog">

                  <div class = "modal-content">
                       <div class = "modal-header">
                            <button type = "button" class = "close" data-dismiss = "modal"
                            aria-label ="close"><span aria-hidden="true">&times;</span></button>
                            <h2 class = "modal-title" id = "myModalLabel" >Saisie du message descriptif du restau</h2>
                       </div>


                        <div class = "modal-body">
                            <form method="POST" action="../fonction/addmsgrestau.php" class="form_msgrestau" >


     
			<div class="form-group">
								
										<label for="message" class="col-lg-2 control-label">Message description restau</label>
										
										<div class="col-lg-10">
										<textarea name="msgrestau" class="form-control" id="msgrestau" placeholder="Entrez le message de description du restau"></textarea>
										</div>
				</div><br><br><br>

          
                            
                  <div class="reponse" id= "rep" style="display:none;"></div>


                        </div>

                        <div class = "modal-footer">
                       <button type = "button" class = "btn btn-default"
                    data-dismiss = "modal">Fermer</button>
                       <button type = "submit" id="save_user" class ="btn btn-primary">Enregistrer</button>
                       <button type = "reset" class ="btn btn-primary" >Nouveau</button>
                        </div>
                        </form>
                        </div>


             </div>

      </div>
          
           <br><br>
<div id="viewmsgrestau"></div>

		
		
		
	</div>
	
	
	</div>
	
	
	


							
							<?php
						 }elseif($action =="menu"){
							?>
							
							
							   <button type ="button" class = "btn btn-large" data-toggle = "modal"    data-target = "#myModaladd" style="background:blue;color:white;">
     <span class="glyphicon glyphicon-plus"></span>    <b>Ajouter un menu</b>
          </button>
     <div class = "modal fade" id = "myModaladd" tabindex = "-1" role = "dialog"
          aria-labelledby = "myModalLabel" aria-hidden = "true">
             <div class = "modal-dialog">

                  <div class = "modal-content">
                       <div class = "modal-header">
                            <button type = "button" class = "close" data-dismiss = "modal"
                            aria-label ="close"><span aria-hidden="true">&times;</span></button>
                            <h2 class = "modal-title" id = "myModalLabel" >Enregistrement de menu</h2>
                       </div>


                        <div class = "modal-body">
                            <form method="POST" action="../fonction/addaclubmenu.php" class="form_clubmenu" >
	 
	 
	 
	 
	 			<div class="form-group">
								
										<label for="nom" class="col-lg-3 control-label" >Intitulé du menu</label>
										
										<div class="col-lg-9">
										<input  type="text" name="menu" class="form-control" id="menu" placeholder="Saisissez le nom du menu" required>
										</div>
				</div>
	 
	 
		<div class="form-group">
								
										<label for="message" class="col-lg-2 control-label">Prix</label>
										
										
										<div class="col-lg-9">
										<input  type="text" name="prix" class="form-control" id="prix" placeholder="Saisissez le prix du menu" required>
										</div>
				</div>
				
					<div class="form-group">
								
										<label for="nom" class="col-lg-3 control-label" >Commentaire spécial</label>
										
										<div class="col-lg-9">
										<input  type="text" name="commentaire" class="form-control" id="commentaire" placeholder="Saisissez un commentaire non obligatoire" >
										</div>
				</div>
				<br><br><br><br><br><br><br>

          
                            
                  <div class="reponse" id= "rep" style="display:none;"></div>


                        </div>

                        <div class = "modal-footer">
                       <button type = "button" class = "btn btn-default"
                    data-dismiss = "modal">Fermer</button>
                       <button type = "submit" id="save_user" class ="btn btn-primary">Enregistrer</button>
                       <button type = "reset" class ="btn btn-primary" >Nouveau</button>
                        </div>
                        </form>
                        </div>


             </div>

      </div>
          
           <br><br>
<div id="viewmenuclub"></div>
							
							<?php
						 }
						 elseif($action =="mot"){
						
						
						?>
						
						
						
						
							
						<h2>Gestion du message du promoteur</h2>  				 
						 <ul class = "nav nav-tabs" role = "tablist">
							<li class = "active" ><a href = "#daftar" style="background:#000 url(../img/bg.png);color:white" role="tab" data-toggle = "tab">Message du promoteur</a></li>
							<li><a href = "#tambah"  style="background:#2f93cd url(../img/bg.png);color:white" role = "tab" data-toggle = "tab">Image du promoteur</a></li>
						</ul>


							<!-- tab panes-->
							<div class = "tab-content">
							
							
										<div class = "tab-pane active" id = "daftar">
										<br/>
									
									
									   <button type ="button" class = "btn btn-large" data-toggle = "modal"    data-target = "#myModalpresent" style="background:#000 url(../img/bg.png);color:white">
     <span class="glyphicon glyphicon-plus"></span>    <b>Ajouter</b>
          </button>
     <div class = "modal fade" id = "myModalpresent" tabindex = "-1" role = "dialog"
          aria-labelledby = "myModalLabel" aria-hidden = "true">
             <div class = "modal-dialog">

                  <div class = "modal-content">
                       <div class = "modal-header">
                            <button type = "button" class = "close" data-dismiss = "modal"
                            aria-label ="close"><span aria-hidden="true">&times;</span></button>
                            <h2 class = "modal-title" id = "myModalLabel" >Saisie du message</h2>
                       </div>
									
									<div class = "modal-body">
                            <form method="POST" class="form_message" >


     
			<div class="form-group">
								
										<label for="message" class="col-lg-2 control-label">Message</label>
										
										<div class="col-lg-10">
										<textarea name="message" class="form-control" id="message" placeholder="Entrez le message du promoteur"></textarea>
										</div>
				</div><br><br><br>

          
                            
                  <div class="reponse" id= "rep" style="display:none;"></div>


                        </div>
									
									     <div class = "modal-footer">
                       <button type = "button" class = "btn btn-default"
                    data-dismiss = "modal">Fermer</button>
                       <button type = "submit" id="save_user" class ="btn btn-primary">Enregistrer</button>
                       <button type = "reset" class ="btn btn-primary" >Nouveau</button>
                        </div>
                        </form>
									
									
										</div>
										
	</div>		
</div>	
           <br><br>
<div id="viewmessage"></div>
</div>
										<div class = "tab-pane" id = "tambah">
										
											<script type="text/javascript" src="footable/js/footable.js"></script>
											<script type="text/javascript" src="footable/js/footable.paginate.js"></script>
											<script type="text/javascript" src="footable/js/footable.filter.js"></script>
											<link rel="stylesheet" type="text/css" href="../admin/footable/css/footable.metro.css">
											
	<br>										
<table class="table table-condensed footable table-bordered table-hover" data-filter="#filter" data-page-size ="4" >
		<thead>
			<th data-toggle="true">Joindre</th>
			<th data-hide="phone">Aperçu</th>
		</thead>
		<tbody>
			<?php
				$sql =mysql_query("SELECT * FROM image_message") ;
				while ($row = mysql_fetch_array($sql)) {
					?>

					<tr>
						<td>
						<form method = "POST" action="../fonction/addimgmessage.php" class="form_imgmessage" enctype="multipart/form-data" >
						<input type="file" name ="photo" class="form-control">
						<button type="submit" class="btn btn-primary" style="background:#2f93cd  url(../img/bg.png);color:white">Joindre l'image</button>
						</form>
						</td>
						<td><img src="" id="photo" width="350" height="250"></td>
					</tr>

<?php
				}

              ?>

		</tbody>

		<tfoot class = "hide-if-no-paging">
				<td colspan="4">

						<div class = "pagination">

						</div>

				</td>

		</tfoot>
</table>

<script type="text/javascript">
	$(".footable").footable();
	</script>

						
							 
							 
										</div>
							 </div>
							 
							 
						
						
						
						
						
						
						<?php
						
						
						
						
						 }elseif($action =="gevent"){
							 
							 ?>
							 
							 
							 
							 <h2>Gestion des événements</h2>  
   <button type ="button" class = "btn btn-large" data-toggle = "modal"    data-target = "#myModaladdevent" style="background:blue;color:white;">
     <span class="glyphicon glyphicon-plus"></span>    <b>Ajouter</b>
          </button>
     <div class = "modal fade" id = "myModaladdevent" tabindex = "-1" role = "dialog"
          aria-labelledby = "myModalLabel" aria-hidden = "true">
             <div class = "modal-dialog">

                  <div class = "modal-content">
                       <div class = "modal-header">
                            <button type = "button" class = "close" data-dismiss = "modal"
                            aria-label ="close"><span aria-hidden="true">&times;</span></button>
                            <h2 class = "modal-title" id = "myModalLabel" >Saisie des événement</h2>
                       </div>


                        <div class = "modal-body">
                            <form method="POST" action="../fonction/addevent.php" class="form_event" >


							
								<div class="form-group">
								
										<label for="nom" class="col-lg-4 control-label">Titre de l'événement</label>
										
										<div class="col-lg-8">
										<input  type="titre" class="form-control" id="titre" placeholder="Saisissez le titre">
										</div>
								</div>
     
			<div class="form-group">
								
										<label for="message" class="col-lg-4 control-label">Contenu</label>
										
										<div class="col-lg-8">
										<textarea name="gevent" class="form-control" id="gevent" placeholder="Entrez le contenu de l'événement"></textarea>
										</div>
				</div><br><br><br><br><br><br><br>

          
                            
                  <div class="reponse" id= "rep" style="display:none;"></div>


                        </div>

                        <div class = "modal-footer">
                       <button type = "button" class = "btn btn-default"
                    data-dismiss = "modal">Fermer</button>
                       <button type = "submit" id="save_user" class ="btn btn-primary">Enregistrer</button>
                       <button type = "reset" class ="btn btn-primary" >Nouveau</button>
                        </div>
                        </form>
                        </div>


             </div>

      </div>
          
           <br><br>
<div id="viewevent"></div>
													 
							 
							 
							 
							 <?php
						 }elseif($action =="gband"){
							?> 
							
							
							
							<h2>Gestion du bar</h2>  				 
						 <ul class = "nav nav-tabs" role = "tablist">
							<li class = "active" ><a href = "#daftar" style="background:#000 url(../img/bg.png);color:white" role="tab" data-toggle = "tab">Texte présentant le bar</a></li>
							<li><a href = "#tambah"  style="background:#2f93cd url(../img/bg.png);color:white" role = "tab" data-toggle = "tab">Image gallerie du bar</a></li>
						</ul>


							<!-- tab panes-->
							<div class = "tab-content">
							
							
										<div class = "tab-pane active" id = "daftar">
										<br/>
									
									
									   <button type ="button" class = "btn btn-large" data-toggle = "modal"    data-target = "#myModalpresent" style="background:#000 url(../img/bg.png);color:white">
     <span class="glyphicon glyphicon-plus"></span>    <b>Ajouter</b>
          </button>
     <div class = "modal fade" id = "myModalpresent" tabindex = "-1" role = "dialog"
          aria-labelledby = "myModalLabel" aria-hidden = "true">
             <div class = "modal-dialog">

                  <div class = "modal-content">
                       <div class = "modal-header">
                            <button type = "button" class = "close" data-dismiss = "modal"
                            aria-label ="close"><span aria-hidden="true">&times;</span></button>
                            <h2 class = "modal-title" id = "myModalLabel" >Saisie du texte présentant le bar</h2>
                       </div>
									
									<div class = "modal-body">
                            <form method="POST" class="form_bar" >


     
			<div class="form-group">
								
										<label for="message" class="col-lg-2 control-label">texte présentant le bar</label>
										
										<div class="col-lg-10">
										<textarea name="bar" class="form-control" id="bar" placeholder="Entrez le texte dedescriptif du bar"></textarea>
										</div>
				</div><br><br><br>

          
                            
                  <div class="reponse" id= "rep" style="display:none;"></div>


                        </div>
									
									     <div class = "modal-footer">
                       <button type = "button" class = "btn btn-default"
                    data-dismiss = "modal">Fermer</button>
                       <button type = "submit" id="save_user" class ="btn btn-primary">Enregistrer</button>
                       <button type = "reset" class ="btn btn-primary" >Nouveau</button>
                        </div>
                        </form>
									
									
										</div>
										
	</div>		
</div>	
           <br><br>
<div id="viewbar"></div>
</div>
										<div class = "tab-pane" id = "tambah">
										
											<script type="text/javascript" src="footable/js/footable.js"></script>
											<script type="text/javascript" src="footable/js/footable.paginate.js"></script>
											<script type="text/javascript" src="footable/js/footable.filter.js"></script>
											<link rel="stylesheet" type="text/css" href="../admin/footable/css/footable.metro.css">
											
	<br>										
<table class="table table-condensed footable table-bordered table-hover" data-filter="#filter" data-page-size ="4" >
		<thead>
			<th data-toggle="true">Ordre</th>
			<th data-hide="phone">Aperçu</th>
			<th data-hide="phone">joindre image</th>
		</thead>
		<tbody>
			<?php
				$sql =mysql_query("SELECT * FROM gallerie_bar") ;
				while ($row = mysql_fetch_array($sql)) {
					?>

					<tr>
						<td>
					<?php echo $row['idimgbar'];?>
						</td>
						<td><img src="../<?php echo$row['chemin'];?>" id="photo" width="250" height="250"></td>
						<td>
					<a href="?user=<?php echo$user; ?>&commande=imgbar&id=<?php echo $row['idimgbar'] ;?>">Joindre une image</a>
						</td>
					</tr>

<?php
				}

              ?>

		</tbody>

		<tfoot class = "hide-if-no-paging">
				<td colspan="4">

						<div class = "pagination">

						</div>

				</td>

		</tfoot>
</table>

<script type="text/javascript">
	$(".footable").footable();
	</script>

						
							 
							 
										</div>
							 </div>
							 
							
							
							
							
							<?php
						 }elseif($action =="gphototheque"){
							 
							 echo"photothèque";
						 }elseif($action =="imgbar"){
							 $id = $_GET['id'];
							 ?>
							 <h2>Jointure d'une image gallérie bar</h2>
							 <form method ="POST" action="../fonction/addimgbar.php" class="form_imgbar">
							 <input type="hidden" name="id" id="ident" value="<?php echo$id;?>">
							 <input type ="file" name="photo" class="form-control" required>
							 <button type="submit">Valider</button>
							 </form><br><br>
							 <a href="?user=<?php echo$user; ?>&commande=gband">Retour</a>
							 <?php
						 }
						 elseif($action =="gclub"){
							?>
							
							
							
							
							
							
							
							<h2>Gestion page accueil du club</h2>	
<ul class = "nav nav-tabs" role = "tablist">
	<li class = "active"><a href = "#daftar" role="tab" data-toggle = "tab" style="background:#000 url(../img/bg.png);color:white">Gallerie</a></li>
	<li><a href = "#tamb" role = "tab" data-toggle = "tab" style="background:#2f43cd url(../img/bg.png);color:white">Actualité</a></li>
	<li><a href = "#tambah" role = "tab" data-toggle = "tab" style="background:#2f93cd url(../img/bg.png);color:white">Stars au club</a></li>
</ul>


<!-- tab panes-->
<div class = "tab-content">
	<div class = "tab-pane active" id = "daftar">
<br/>
   <button type ="button" class = "btn btn-large" data-toggle = "modal"    data-target = "#myModalad" style="background:#000 url(../img/bg.png);color:white">
     <span class="glyphicon glyphicon-plus"></span>    <b>Ajouter</b>
          </button>
     <div class = "modal fade" id = "myModalad" tabindex = "-1" role = "dialog"
          aria-labelledby = "myModalLabe" aria-hidden = "true">
             <div class = "modal-dialog">

                  <div class = "modal-content">
                       <div class = "modal-header">
                            <button type = "button" class = "close" data-dismiss = "modal"
                            aria-label ="close"><span aria-hidden="true">&times;</span></button>
                            <h2 class = "modal-title" id = "myModalLabe" >Ajout d'une image</h2>
                       </div>


                        <div class = "modal-body">
                            <form method="POST" action="../fonction/addclubhomegallerie.php" class="form_clubhomegallerie" >


     
			<div class="form-group">
								
								<input type ="file" name = "photo" class = "form-control" required>
				</div><br><br><br>

          
                            
                  <div class="reponse" id= "rep" style="display:none;"></div>


                        </div>

                        <div class = "modal-footer">
                       <button type = "button" class = "btn btn-default"
                    data-dismiss = "modal">Fermer</button>
                       <button type = "submit" id="save_user" class ="btn btn-primary">Enregistrer</button>
                       <button type = "reset" class ="btn btn-primary" >Nouveau</button>
                        </div>
                        </form>
                        </div>


             </div>

      </div>
          
           <br><br>
<div id="viewclubhomegallerie"></div>
</div>
	
	
	
	
	<br>
		<div class = "tab-pane" id = "tambah">
	
	   <button type ="button" class = "btn btn-large" data-toggle = "modal"    data-target = "#myModaladd" style="background:blue;color:white;">
     <span class="glyphicon glyphicon-plus"></span>    <b>Ajouter une star</b>
          </button>
     <div class = "modal fade" id = "myModaladd" tabindex = "-1" role = "dialog"
          aria-labelledby = "myModalLabel" aria-hidden = "true">
             <div class = "modal-dialog">

                  <div class = "modal-content">
                       <div class = "modal-header">
                            <button type = "button" class = "close" data-dismiss = "modal"
                            aria-label ="close"><span aria-hidden="true">&times;</span></button>
                            <h2 class = "modal-title" id = "myModalLabel" >Enregistrement d'une star</h2>
                       </div>


                        <div class = "modal-body">
                            <form method="POST" action="../fonction/addstar.php" class="form_star" >
	 
	 
	 
	 
	 			<div class="form-group">
								
										<label for="nom" class="col-lg-3 control-label" >Nom de la star</label>
										
										<div class="col-lg-9">
										<input  type="text" name="nom" class="form-control" id="nom" placeholder="Saisissez le nom" required>
										</div>
								</div>
	 
	 
		<div class="form-group">
								
										<label for="message" class="col-lg-2 control-label">Commentaire ou interview</label>
										
										<div class="col-lg-10">
										<textarea name="interview" class="form-control" id="interview" placeholder="Entrez le texte de l'interview ou commentaire" required></textarea>
										</div>
				</div><br><br><br><br><br><br><br>

          
                            
                  <div class="reponse" id= "rep" style="display:none;"></div>


                        </div>

                        <div class = "modal-footer">
                       <button type = "button" class = "btn btn-default"
                    data-dismiss = "modal">Fermer</button>
                       <button type = "submit" id="save_user" class ="btn btn-primary">Enregistrer</button>
                       <button type = "reset" class ="btn btn-primary" >Nouveau</button>
                        </div>
                        </form>
                        </div>


             </div>

      </div>
          
           <br><br>
<div id="viewstar"></div>
	
	</div>
	
	
	<div class = "tab-pane" id = "tamb">
		
		
		
		 <button type ="button" class = "btn btn-large" data-toggle = "modal"    data-target = "#myModaladdmsg" style="background:blue;color:white;">
     <span class="glyphicon glyphicon-plus"></span>    <b>Ajouter</b>
          </button>
     <div class = "modal fade" id = "myModaladdmsg" tabindex = "-1" role = "dialog"
          aria-labelledby = "myModalLabel" aria-hidden = "true">
             <div class = "modal-dialog">

                  <div class = "modal-content">
                       <div class = "modal-header">
                            <button type = "button" class = "close" data-dismiss = "modal"
                            aria-label ="close"><span aria-hidden="true">&times;</span></button>
                            <h2 class = "modal-title" id = "myModalLabel" >Saisie d'une actualité</h2>
                       </div>


                        <div class = "modal-body">
                            <form method="POST" action="../fonction/addclubactu.php" class="form_clubactu" >

			<div class="form-group">
								
										<label for="nom" class="col-lg-3 control-label" >Titre</label>
										
										<div class="col-lg-9">
										<input  type="text" name="titre" class="form-control" id="titre" placeholder="Saisissez le titre de l'actualité" required>
										</div>
								</div>
     
			<div class="form-group">
								
										<label for="message" class="col-lg-2 control-label">Message de l'actualité</label>
										
										<div class="col-lg-10">
										<textarea name="msgactu" class="form-control" id="msgactu" placeholder="Entrez le message de l'actualité"></textarea>
										</div>
				</div><br><br><br><br>

          
                            
                  <div class="reponse" id= "rep" style="display:none;"></div>


                        </div>

                        <div class = "modal-footer">
                       <button type = "button" class = "btn btn-default"
                    data-dismiss = "modal">Fermer</button>
                       <button type = "submit" id="save_user" class ="btn btn-primary">Enregistrer</button>
                       <button type = "reset" class ="btn btn-primary" >Nouveau</button>
                        </div>
                        </form>
                        </div>


             </div>

      </div>
          
           <br><br>
<div id="viewclubactu"></div>

		
		
		
	</div>
	
	
	</div>
	
	
	
							
							
							
							
							
							
							
							
							
							
							<?php
						 }elseif($action =="imgstar") 
						 {
							 
							  $idimgstar = $_GET['id'];
							 ?>
							 
							 				<h2>Ajouter la photo de la star</h2>
							
							<form method="POST" action="../fonction/addimgstar.php" class="form_imgstar">
							<input type="hidden" value="<?php echo$idimgstar; ?>" name="idstar">
							<input type="file" name="photo">
							<input type="submit"  value="valider">
							</form><br><br>
							<a href="?user=<?php echo$user;?>&commande=gclub">Retour</a>
							
						
							 
							 
							 <?php
							 
						 } elseif($action =="clubevent"){
							  $idclubevent = $_GET['id'];
							 ?>
							 
						
									<h2>Ajouter une image à cet événement</h2>
							
							<form method="POST" action="../fonction/addimgclubevent.php" class="form_imgclubevent">
							<input type="hidden" value="<?php echo$idclubevent; ?>" name="idclubevent">
							<input type="file" name="photo">
							<input type="submit"  value="valider">
							</form><br><br>
							<a href="?user=<?php echo$user;?>&commande=evenement">Retour</a>
							
						
						
						
							 
							 <?php
						 }
						 elseif($action =="clubactu"){
							 $idactu = $_GET['id'];
						?>
						
						
						
									<h2>Ajouter une image à cette actualité</h2>
							
							<form method="POST" action="../fonction/addimgactu.php" class="form_imgactu">
							<input type="hidden" value="<?php echo$idactu; ?>" name="idactu">
							<input type="file" name="photo">
							<input type="submit"  value="valider">
							</form><br><br>
							<a href="?user=<?php echo$user;?>&commande=gclub">Retour</a>
							
						
						
						
						<?php
						 }
						 elseif($action =="gdivertissement")
						 {
							 
							?>
							
							
							
<ul class = "nav nav-tabs" role = "tablist">
	<li class = "active"><a href = "#daftar" role="tab" data-toggle = "tab" style="background:#000 url(../img/bg.png);color:white"><b>Texte Espace de fête</b></a></li>
	<li><a href = "#tambah" role = "tab" data-toggle = "tab" style="background:#2f93cd  url(../img/bg.png);color:white"><b>Texte Détente et repos</b></a></li>
	<li><a href = "#tambah2" role = "tab" data-toggle = "tab" style="background:green url(../img/bg.png);color:white"><b>Text Jeu</b></a></li>
	<li><a href = "#tambah3" role = "tab" data-toggle = "tab" style="background:orange url(../img/bg.png);color:white"><b>Gestion d'image <small>Espace fête,détente,jeu,actualité,message du promoteur</small></b></a></li>
</ul>


<!-- tab panes-->
<div class = "tab-content">
				<div class = "tab-pane active" id = "daftar">
						
												
   <h2>Texte du module espace de fete</h2>  
   <button type ="button" class = "btn btn-large" data-toggle = "modal"    data-target = "#myModala" style="background:#000 url(../img/bg.png);color:white">
     <span class="glyphicon glyphicon-plus"></span>    <b>Ajouter le texte</b>
          </button>
     <div class = "modal fade" id = "myModala" tabindex = "-1" role = "dialog"
          aria-labelledby = "myModalLabel" aria-hidden = "true">
             <div class = "modal-dialog">

                  <div class = "modal-content">
                       <div class = "modal-header">
                            <button type = "button" class = "close" data-dismiss = "modal"
                            aria-label ="close"><span aria-hidden="true">&times;</span></button>
                            <h2 class = "modal-title" id = "myModalLabel" >Saisie du texte</h2>
                       </div>


                        <div class = "modal-body">
                            <form method="POST" action="../fonction/addtextfete.php" class="form_textfete" >


     
			<div class="form-group">
								
										<label for="message" class="col-lg-2 control-label">Contenu du texte</label>
										
										<div class="col-lg-10">
										<textarea name="textfete" class="form-control" id="textfete" placeholder="Entrez le tetxe descriptif du module espace fête"></textarea>
										</div>
				</div><br><br><br>

          
                            
                  <div class="reponse" id= "rep" style="display:none;"></div>


                        </div>

                        <div class = "modal-footer">
                       <button type = "button" class = "btn btn-default"
                    data-dismiss = "modal">Fermer</button>
                       <button type = "submit" id="save_user" class ="btn btn-primary">Enregistrer</button>
                       <button type = "reset" class ="btn btn-primary" >Nouveau</button>
                        </div>
                        </form>
                        </div>


             </div>

      </div>
          
           <br><br>
<div id="viewtextfete"></div>
</div>
						
						
		
				
				
			<div class = "tab-pane" id = "tambah">

			
															
   <h2>Texte du module Détente et repos</h2>  
   <button type ="button" class = "btn btn-large" data-toggle = "modal"    data-target = "#myModal" style="background:#2f93cd  url(../img/bg.png);color:white">
     <span class="glyphicon glyphicon-plus"></span>    <b>Ajouter le texte</b>
          </button>
     <div class = "modal fade" id = "myModal" tabindex = "-1" role = "dialog"
          aria-labelledby = "myModalLabel" aria-hidden = "true">
             <div class = "modal-dialog">

                  <div class = "modal-content">
                       <div class = "modal-header">
                            <button type = "button" class = "close" data-dismiss = "modal"
                            aria-label ="close"><span aria-hidden="true">&times;</span></button>
                            <h2 class = "modal-title" id = "myModalLabel" >Saisie du texte</h2>
                       </div>


                        <div class = "modal-body">
                            <form method="POST" action="../fonction/addtextdetente.php" class="form_textdetente" >


     
			<div class="form-group">
								
										<label for="message" class="col-lg-2 control-label">Contenu du texte</label>
										
										<div class="col-lg-10">
										<textarea name="textdetente" class="form-control" id="textdetente" placeholder="Entrez le tetxe descriptif du module détente et repos"></textarea>
										</div>
				</div><br><br><br>

          
                            
                  <div class="reponse" id= "rep" style="display:none;"></div>


                        </div>

                        <div class = "modal-footer">
                       <button type = "button" class = "btn btn-default"
                    data-dismiss = "modal">Fermer</button>
                       <button type = "submit" id="save_user" class ="btn btn-primary">Enregistrer</button>
                       <button type = "reset" class ="btn btn-primary" >Nouveau</button>
                        </div>
                        </form>
                        </div>


             </div>

      </div>
          
           <br><br>
<div id="viewtextdetente"></div>
			
				
			</div>
			
			
			<div class = "tab-pane" id = "tambah2">
			
			
															
   <h2>Texte du module Jeu</h2>  
   <button type ="button" class = "btn btn-large" data-toggle = "modal"    data-target = "#myModa" style="background:green url(../img/bg.png);color:white">
     <span class="glyphicon glyphicon-plus"></span>    <b>Ajouter le texte</b>
          </button>
     <div class = "modal fade" id = "myModa" tabindex = "-1" role = "dialog"
          aria-labelledby = "myModalLabel" aria-hidden = "true">
             <div class = "modal-dialog">

                  <div class = "modal-content">
                       <div class = "modal-header">
                            <button type = "button" class = "close" data-dismiss = "modal"
                            aria-label ="close"><span aria-hidden="true">&times;</span></button>
                            <h2 class = "modal-title" id = "myModalLabel" >Saisie du texte</h2>
                       </div>


                        <div class = "modal-body">
                            <form method="POST" action="../fonction/addtextjeu.php" class="form_textjeu" >


     
			<div class="form-group">
								
										<label for="message" class="col-lg-2 control-label">Contenu du texte</label>
										
										<div class="col-lg-10">
										<textarea name="textjeu" class="form-control" id="textjeu" placeholder="Entrez le tetxe descriptif du module jeu"></textarea>
										</div>
				</div><br><br><br>

          
                            
                  <div class="reponse" id= "rep" style="display:none;"></div>


                        </div>

                        <div class = "modal-footer">
                       <button type = "button" class = "btn btn-default"
                    data-dismiss = "modal">Fermer</button>
                       <button type = "submit" id="save_user" class ="btn btn-primary">Enregistrer</button>
                       <button type = "reset" class ="btn btn-primary" >Nouveau</button>
                        </div>
                        </form>
                        </div>


             </div>

      </div>
          
           <br><br>
<div id="viewtextjeu"></div>
			
			</div>
			
			
			<div class = "tab-pane" id = "tambah3" >

					   <h2>Gestion d'image <small>Espace fête,détente,jeu,actualité,message du promoteur</small></h2>  
   <button type ="button" class = "btn btn-large" data-toggle = "modal"    data-target = "#myMod" style="background:orange url(../img/bg.png);color:white">
     <span class="glyphicon glyphicon-plus"></span>    <b>Ajouter une image</b>
          </button>
     <div class = "modal fade" id = "myMod" tabindex = "-1" role = "dialog"
          aria-labelledby = "myModalLab" aria-hidden = "true">
             <div class = "modal-dialog">

                  <div class = "modal-content">
                       <div class = "modal-header">
                            <button type = "button" class = "close" data-dismiss = "modal"
                            aria-label ="close"><span aria-hidden="true">&times;</span></button>
                            <h2 class = "modal-title" id = "myModalLab" >Jointure d'image </h2>
                       </div>


                        <div class = "modal-body">
                            <form method="POST" action="../fonction/addimgmoduledivert.php" class="form_galleriedivert" >

							
								<div class="form-group">
								
										<label for="telephone" class="col-lg-4 control-label">Image pour:</label>
										
										<div class="col-lg-8">
									<select class="form-control" name="moduledivert" required>
									<option value="">Séléctionnez le module</option>
									<option value="fete">Espace de fête</option>
									<option value="detente">Détente et repos</option>
									<option value="jeu">Jeu</option>
									<option value="actualite">Image actualité</option>
									<option value="promoteur">Photos du promoteur</option>
									</select>
										</div>
								</div>
     
			<div class="form-group">
								
									<input type="file" name ="photo" class="form-control">
				</div><br><br><br>

          
                            
                  <div class="reponse" id= "rep" style="display:none;"></div>


                        </div>

                        <div class = "modal-footer">
                       <button type = "button" class = "btn btn-default"
                    data-dismiss = "modal">Fermer</button>
                       <button type = "submit" id="save_user" class ="btn btn-primary">Ajouter</button>
                        </div>
                        </form>
                        </div>


             </div>

      </div>
          
           <br><br>
<div id="viewgalleriemodule"></div>
				
			</div>


 </div>
							
							<?php
						 }
						
					}else{
						?>

						<h2>Les discussions du forum</h2>
						
						<div id="viewadmin"></div>
						
						<?php
					}
					
					?>
					
					</div>
					</div>
				
				</div>
			
			</div>
		</section>
		
		
		<script type="text/javascript">
		
		
		$('.form_info').submit(function(){
  var info = $('#info').val();

  $.post('../fonction/addinfo.php',{info:info},function(donnes){
   alert(donnes);
   afficher_info();
    $('#info').val('');
  });
  return false;
});




		$('.form_message').submit(function(){
  var message = $('#message').val();

  $.post('../fonction/addmessage.php',{message:message},function(donnes){
   alert(donnes);
   afficher_message();
    $('#message').val('');
  });
  return false;
});




		$('.form_textjeu').submit(function(){
  var textjeu = $('#textjeu').val();

  $.post('../fonction/addtextjeu.php',{textjeu:textjeu},function(donnes){
   alert(donnes);
   afficher_textjeu();
    $('#textjeu').val('');
  });
  return false;
});



		$('.form_msgrestau').submit(function(){
  var msgrestau = $('#msgrestau').val();

  $.post('../fonction/addmsgrestau.php',{msgrestau:msgrestau},function(donnes){
   alert(donnes);
   afficher_msgrestau();
    $('#msgrestau').val('');
  });
  return false;
});





		$('.form_actualite').submit(function(){
  var actualite = $('#actualite').val();

  $.post('../fonction/addactualite.php',{actualite:actualite},function(donnes){
   alert(donnes);
   afficher_actualite();
    $('#actualite').val('');
  });
  return false;
});


$('.form_menu').submit(function(e){

var fom = $(this);
var formdata = (window.FormData) ? new FormData(fom[0]) : null;
var data = (formdata !== null) ? formdata : fom.serialize();
$.ajax({
  url : fom.attr('action'),
  type : fom.attr('method'),
  contentType : false,
  processData : false,
  data : data

}).done(function(donnes){
	alert(donnes)
$("#groupe").val('');
$("#prix").val('');
$("#intitule").val('');
});
return false;
});




$('.form_grandegallerie').submit(function(e){
showLoader('.form_grandegallerie');
var fom = $(this);
var formdata = (window.FormData) ? new FormData(fom[0]) : null;
var data = (formdata !== null) ? formdata : fom.serialize();
$.ajax({
  url : fom.attr('action'),
  type : fom.attr('method'),
  contentType : false,
  processData : false,
  data : data

}).done(function(donnes){
	alert(donnes);
hideLoader();
afficher_grandegallerie();
});
return false;
});




$('.form_video').submit(function(e){
showLoader('.form_video');
var fom = $(this);
var formdata = (window.FormData) ? new FormData(fom[0]) : null;
var data = (formdata !== null) ? formdata : fom.serialize();
$.ajax({
  url : fom.attr('action'),
  type : fom.attr('method'),
  contentType : false,
  processData : false,
  data : data

}).done(function(donnes){
	alert(donnes);
hideLoader();
});
return false;
});



$('.form_galleriedivert').submit(function(e){
showLoader('.form_galleriedivert');
var fom = $(this);
var formdata = (window.FormData) ? new FormData(fom[0]) : null;
var data = (formdata !== null) ? formdata : fom.serialize();
$.ajax({
  url : fom.attr('action'),
  type : fom.attr('method'),
  contentType : false,
  processData : false,
  data : data

}).done(function(donnes){
	alert(donnes);
	hideLoader();
	afficher_galleriemodule();

});
return false;
});



$('.form_restaugallerie').submit(function(e){
showLoader('.form_restaugallerie');
var fom = $(this);
var formdata = (window.FormData) ? new FormData(fom[0]) : null;
var data = (formdata !== null) ? formdata : fom.serialize();
$.ajax({
  url : fom.attr('action'),
  type : fom.attr('method'),
  contentType : false,
  processData : false,
  data : data

}).done(function(donnes){
	alert(donnes);
	hideLoader();
	afficher_gallerierestau();
	

});
return false;
});


 /*
 $('.form_restaugallerie').ajaxForm({
	 beforeSend: function(){
		 $('.progress').show();
	 },
	 uploadProgress: function(event,position,total,percentComplete){
		 $('.progress-bar').width(percentComplete='%');
		 $('.sr-only').html(percentComplete='%');
	 },
	 success:function(){},
	 complete:function(){}
 });
 $('.progress').hide();

*/

$('.form_imgevent').submit(function(e){

var fom = $(this);
var formdata = (window.FormData) ? new FormData(fom[0]) : null;
var data = (formdata !== null) ? formdata : fom.serialize();
$.ajax({
  url : fom.attr('action'),
  type : fom.attr('method'),
  contentType : false,
  processData : false,
  data : data

}).done(function(donnes){
	alert(donnes)


});
return false;
});



$('.form_imgactu').submit(function(e){

var fom = $(this);
var formdata = (window.FormData) ? new FormData(fom[0]) : null;
var data = (formdata !== null) ? formdata : fom.serialize();
$.ajax({
  url : fom.attr('action'),
  type : fom.attr('method'),
  contentType : false,
  processData : false,
  data : data

}).done(function(donnes){
	alert(donnes)


});
return false;
});





$('.form_imgclubevent').submit(function(e){
showLoader('.form_imgclubevent');
var fom = $(this);
var formdata = (window.FormData) ? new FormData(fom[0]) : null;
var data = (formdata !== null) ? formdata : fom.serialize();
$.ajax({
  url : fom.attr('action'),
  type : fom.attr('method'),
  contentType : false,
  processData : false,
  data : data

}).done(function(donnes){
	alert(donnes);
hideLoader();

});
return false;
});




$('.form_imgstar').submit(function(e){

var fom = $(this);
var formdata = (window.FormData) ? new FormData(fom[0]) : null;
var data = (formdata !== null) ? formdata : fom.serialize();
$.ajax({
  url : fom.attr('action'),
  type : fom.attr('method'),
  contentType : false,
  processData : false,
  data : data

}).done(function(donnes){
	alert(donnes)


});
return false;
});






$('.form_imgbar').submit(function(e){
showLoader('.form_imgbar');
var fom = $(this);
var formdata = (window.FormData) ? new FormData(fom[0]) : null;
var data = (formdata !== null) ? formdata : fom.serialize();
$.ajax({
  url : fom.attr('action'),
  type : fom.attr('method'),
  contentType : false,
  processData : false,
  data : data

}).done(function(donnes){
	alert(donnes);
hideLoader();

});
return false;
});



	
		$('.form_presentation').submit(function(){
  var presentation = $('#presentation').val();

  $.post('../fonction/addpresentation.php',{presentation:presentation},function(donnes){
   alert(donnes);
   afficher_presentation();
    $('#presentation').val('');
  });
  return false;
});




	
		$('.form_bar').submit(function(){
  var bar = $('#bar').val();

  $.post('../fonction/addbar.php',{bar:bar},function(donnes){
   alert(donnes);
   afficher_bar();
    $('#bar').val('');
  });
  return false;
});



		$('.form_event').submit(function(){
  var titre = $('#titre').val();
   var gevent = $('#gevent').val();

  $.post('../fonction/addevent.php',{titre:titre,gevent:gevent},function(donnes){
   alert(donnes);
   afficher_event();
    $('#titre').val('');
	$('#gevent').val('');
  });
  return false;
});


	
		$('.form_textdetente').submit(function(){
  var textdetente = $('#textdetente').val();

  $.post('../fonction/addtextdetente.php',{textdetente:textdetente},function(donnes){
   alert(donnes);
   afficher_textdetente();
    $('#textdetente').val('');
  });
  return false;
});
	
	

			$('.form_textfete').submit(function(){
  var textfete = $('#textfete').val();

  $.post('../fonction/addtextfete.php',{textfete:textfete},function(donnes){
   alert(donnes);
   afficher_textfete();
    $('#textfete').val('');
  });
  return false;
});
	
	
		
		function afficher_info(){
$.ajax({
    type: "GET",
    url:"../fonction/getinfo.php"

}).done(function(data){
  $('#viewinfo').html(data);
});
}



		function afficher_textjeu(){
$.ajax({
    type: "GET",
    url:"../fonction/gettextjeu.php"

}).done(function(data){
  $('#viewtextjeu').html(data);
});
}

		function afficher_msgrestau(){
$.ajax({
    type: "GET",
    url:"../fonction/getmsgrestau.php"

}).done(function(data){
  $('#viewmsgrestau').html(data);
});
}




		function afficher_clubmedia(){
$.ajax({
    type: "GET",
    url:"../fonction/getclubmedia.php"

}).done(function(data){
  $('#viewclubmedia').html(data);
});
}




		function afficher_gallerierestau(){
$.ajax({
    type: "GET",
    url:"../fonction/getgallerierestau.php"

}).done(function(data){
  $('#viewrestaugallerie').html(data);
});
}


		function afficher_galleriemodule(){
$.ajax({
    type: "GET",
    url:"../fonction/getgalleriemodule.php"

}).done(function(data){
  $('#viewgalleriemodule').html(data);
});
}



		function afficher_textdetente(){
$.ajax({
    type: "GET",
    url:"../fonction/gettextdetente.php"

}).done(function(data){
  $('#viewtextdetente').html(data);
});
}

		function afficher_textfete(){
$.ajax({
    type: "GET",
    url:"../fonction/gettextfete.php"

}).done(function(data){
  $('#viewtextfete').html(data);
});
}

		function afficher_menu(){
$.ajax({
    type: "GET",
    url:"../fonction/getmenu.php"

}).done(function(data){
  $('#viewmenu').html(data);
});
}


		function afficher_bar(){
$.ajax({
    type: "GET",
    url:"../fonction/getbar.php"

}).done(function(data){
  $('#viewbar').html(data);
});
}

		function afficher_apercu(){
$.ajax({
    type: "GET",
    url:"../fonction/getapercu.php"

}).done(function(donne){
   $('#photo').attr('src','../'+donne);
});
}



		function afficher_presentation(){
$.ajax({
    type: "GET",
    url:"../fonction/getpresentation.php"

}).done(function(data){
  $('#viewpresentation').html(data);
});
}



		function afficher_grandegallerie(){
$.ajax({
    type: "GET",
    url:"../fonction/getgrandegallerie.php"

}).done(function(data){
  $('#viewgrandegallerie').html(data);
});
}



		function afficher_actualite(){
$.ajax({
    type: "GET",
    url:"../fonction/getactualite.php"

}).done(function(data){
  $('#viewactualite').html(data);
});
}


		function afficher_clubhomegallerie(){
$.ajax({
    type: "GET",
    url:"../fonction/getclubhomegallerie.php"

}).done(function(data){
  $('#viewclubhomegallerie').html(data);
});
}



		function afficher_clubevent(){
$.ajax({
    type: "GET",
    url:"../fonction/getclubevent.php"

}).done(function(data){
  $('#viewclubevent').html(data);
});
}



		function afficher_message(){
$.ajax({
    type: "GET",
    url:"../fonction/getmessage.php"

}).done(function(data){
  $('#viewmessage').html(data);
});
}


		function afficher_clubactu(){
$.ajax({
    type: "GET",
    url:"../fonction/getclubactu.php"

}).done(function(data){
  $('#viewclubactu').html(data);
});
}


		function afficher_star(){
$.ajax({
    type: "GET",
    url:"../fonction/getstar.php"

}).done(function(data){
  $('#viewstar').html(data);
});
}



		function afficher_admin(){
$.ajax({
    type: "GET",
    url:"../fonction/getadminpub.php"

}).done(function(data){
  $('#viewadmin').html(data);
});
}



		function afficher_event(){
$.ajax({
    type: "GET",
    url:"../fonction/getevent.php"

}).done(function(data){
  $('#viewevent').html(data);
});
}



		function afficher_clubmenu(){
$.ajax({
    type: "GET",
    url:"../fonction/getmenuclub.php"

}).done(function(data){
  $('#viewmenuclub').html(data);
});
}



$('.form_imgpresentation').submit(function(e){
showLoader('.form_imgpresentation');
var fom = $(this);
var formdata = (window.FormData) ? new FormData(fom[0]) : null;
var data = (formdata !== null) ? formdata : fom.serialize();
$.ajax({
  url : fom.attr('action'),
  type : fom.attr('method'),
  contentType : false,
  processData : false,
  data : data

}).done(function(donnes){
	alert(donnes);
	hideLoader();
  afficher_apercu();
});
return false;
});




$('.form_star').submit(function(e){

var fom = $(this);
var formdata = (window.FormData) ? new FormData(fom[0]) : null;
var data = (formdata !== null) ? formdata : fom.serialize();
$.ajax({
  url : fom.attr('action'),
  type : fom.attr('method'),
  contentType : false,
  processData : false,
  data : data

}).done(function(donnes){
	alert(donnes)
  afficher_star();
  $('#nom').val('');
  $('#interview').val('');
});
return false;
});




$('.form_clubhomegallerie').submit(function(e){
showLoader('.form_clubhomegallerie');
var fom = $(this);
var formdata = (window.FormData) ? new FormData(fom[0]) : null;
var data = (formdata !== null) ? formdata : fom.serialize();
$.ajax({
  url : fom.attr('action'),
  type : fom.attr('method'),
  contentType : false,
  processData : false,
  data : data

}).done(function(donnes){
	alert(donnes);
	hideLoader();
  afficher_clubhomegallerie();
});
return false;
});



$('.form_clubactu').submit(function(e){

var fom = $(this);
var formdata = (window.FormData) ? new FormData(fom[0]) : null;
var data = (formdata !== null) ? formdata : fom.serialize();
$.ajax({
  url : fom.attr('action'),
  type : fom.attr('method'),
  contentType : false,
  processData : false,
  data : data

}).done(function(donnes){
	alert(donnes)
  afficher_clubactu();
  $('#titre').val('');
  $('#msgactu').val('');
});
return false;
});





$('.form_clubmenu').submit(function(e){

var fom = $(this);
var formdata = (window.FormData) ? new FormData(fom[0]) : null;
var data = (formdata !== null) ? formdata : fom.serialize();
$.ajax({
  url : fom.attr('action'),
  type : fom.attr('method'),
  contentType : false,
  processData : false,
  data : data

}).done(function(donnes){
	alert(donnes)
  afficher_clubmenu();
  $('#prix').val('');
  $('#menu').val('');
  $('#commentaire').val('');
});
return false;
});




$('.form_clubmedia').submit(function(e){
showLoader('.form_clubmedia');
var fom = $(this);
var formdata = (window.FormData) ? new FormData(fom[0]) : null;
var data = (formdata !== null) ? formdata : fom.serialize();
$.ajax({
  url : fom.attr('action'),
  type : fom.attr('method'),
  contentType : false,
  processData : false,
  data : data

}).done(function(donnes){
	alert(donnes);
	hideLoader();
  afficher_clubmedia();

});
return false;
});




$('.form_clubevent').submit(function(e){

var fom = $(this);
var formdata = (window.FormData) ? new FormData(fom[0]) : null;
var data = (formdata !== null) ? formdata : fom.serialize();
$.ajax({
  url : fom.attr('action'),
  type : fom.attr('method'),
  contentType : false,
  processData : false,
  data : data

}).done(function(donnes){
	alert(donnes)
  afficher_clubevent();
  $('#titre').val('');
  $('#msgevent').val('');
});
return false;
});




function modifierinfo(idr){

  var id = idr;
 var info= $('#info'+id).val(); 

 $.post('../fonction/modifierinfo.php?id='+id,{info:info},function(donne){

   $('.reponse').html(donne).fadeIn(200,'linear');
    $('.reponse').html(donne).fadeOut(5000,'linear');
 });
return false;
}


function modifierevent(idr){

  var id = idr;
 var titre= $('#titre'+id).val(); 
 var gevent= $('#gevent'+id).val();  

 $.post('../fonction/modifierevent.php?id='+id,{titre:titre,gevent:gevent},function(donne){

   $('.reponse').html(donne).fadeIn(200,'linear');
    $('.reponse').html(donne).fadeOut(5000,'linear');
 });
return false;
}



function modifierclubactu(idr){

  var id = idr;
 var titre= $('#titre'+id).val(); 
 var msgactu= $('#msgactu'+id).val();  

 $.post('../fonction/modifierclubactu.php?id='+id,{titre:titre,msgactu:msgactu},function(donne){

   $('.reponse').html(donne).fadeIn(200,'linear');
    $('.reponse').html(donne).fadeOut(5000,'linear');
 });
return false;
}


function modifierclubevent(idr){

  var id = idr;
 var titre= $('#titre'+id).val(); 
 var msgevent= $('#msgevent'+id).val();  

 $.post('../fonction/modifierclubevent.php?id='+id,{titre:titre,msgevent:msgevent},function(donne){

   $('.reponse').html(donne).fadeIn(200,'linear');
    $('.reponse').html(donne).fadeOut(5000,'linear');
 });
return false;
}






function modifierstar(idr){

  var id = idr;
 var titre= $('#nom'+id).val(); 
 var msgactu= $('#interview'+id).val();  

 $.post('../fonction/modifierstar.php?id='+id,{titre:titre,msgactu:msgactu},function(donne){

   $('.reponse').html(donne).fadeIn(200,'linear');
    $('.reponse').html(donne).fadeOut(5000,'linear');
 });
return false;
}

function modifierbar(idr){

  var id = idr;
 var bar= $('#bar'+id).val(); 
 $.post('../fonction/modifierbar.php?id='+id,{bar:bar},function(donne){

   $('.reponse').html(donne).fadeIn(200,'linear');
    $('.reponse').html(donne).fadeOut(5000,'linear');
 });
return false;
}





function modifiermsgrestau(idr){

  var id = idr;
 var msgrestau= $('#msgrestau'+id).val(); 

 $.post('../fonction/modifiermsgrestau.php?id='+id,{msgrestau:msgrestau},function(donne){

   $('.reponse').html(donne).fadeIn(200,'linear');
    $('.reponse').html(donne).fadeOut(5000,'linear');
 });
return false;
}



function modifiertextjeu(idr){

  var id = idr;
 var textjeu= $('#textjeu'+id).val(); 

 $.post('../fonction/modifiertextjeu.php?id='+id,{textjeu:textjeu},function(donne){

   $('.reponse').html(donne).fadeIn(200,'linear');
    $('.reponse').html(donne).fadeOut(5000,'linear');
 });
return false;
}




function modifiertextdetente(idr){

  var id = idr;
 var textdetente= $('#textdetente'+id).val(); 

 $.post('../fonction/modifiertextdetente.php?id='+id,{textdetente:textdetente},function(donne){

   $('.reponse').html(donne).fadeIn(200,'linear');
    $('.reponse').html(donne).fadeOut(5000,'linear');
 });
return false;
}



function reponse(idr){

  var id = idr;
  var user = $('#userforum').val();

 var reponse= $('#reponse'+id).val(); 
 $.post('../fonction/reponsepub.php?id='+id,{reponse:reponse,user:user},function(donne){

   $('.reponse').html(donne).fadeIn(200,'linear');
    $('.reponse').html(donne).fadeOut(5000,'linear');
 });
return false;
}




function modifiertextfete(idr){

  var id = idr;
 var textfete= $('#textfete'+id).val(); 

 $.post('../fonction/modifiertextfete.php?id='+id,{textfete:textfete},function(donne){

   $('.reponse').html(donne).fadeIn(200,'linear');
    $('.reponse').html(donne).fadeOut(5000,'linear');
 });
return false;
}



function modifierevent(idr){

  var id = idr;
 var titre= $('#titre'+id).val(); 
 var gevent= $('#gevent'+id).val(); 

 $.post('../fonction/modifierevent.php?id='+id,{titre:titre,gevent:gevent},function(donne){

   $('.reponse').html(donne).fadeIn(200,'linear');
    $('.reponse').html(donne).fadeOut(5000,'linear');
 });
return false;
}


function modifiermenu(idr){

  var id = idr;
 var prix= $('#prix'+id).val(); 
  var grp= $('#grp'+id).val(); 
   var intitule= $('#intitule'+id).val(); 
 

 $.post('../fonction/modifiermenu.php?id='+id,{prix:prix,grp:grp,intitule:intitule},function(donne){

   $('.reponse').html(donne).fadeIn(200,'linear');
    $('.reponse').html(donne).fadeOut(5000,'linear');
 });
return false;
}



function modifierclubmenu(idr){

  var id = idr;
 var prix= $('#prix'+id).val(); 
  var commentaire= $('#commentaire'+id).val(); 
   var intitule= $('#intitule'+id).val(); 
 

 $.post('../fonction/modifierclubmenu.php?id='+id,{prix:prix,commentaire:commentaire,intitule:intitule},function(donne){

   $('.reponse').html(donne).fadeIn(200,'linear');
    $('.reponse').html(donne).fadeOut(5000,'linear');
 });
return false;
}



function modifiermessage(idr){

  var id = idr;
 var message= $('#message'+id).val(); 

 $.post('../fonction/modifiermessage.php?id='+id,{message:message},function(donne){

   $('.reponse').html(donne).fadeIn(200,'linear');
    $('.reponse').html(donne).fadeOut(5000,'linear');
 });
return false;
}


function modifierpresentation(idr){

  var id = idr;
 var presentation= $('#presentation'+id).val(); 

 $.post('../fonction/modifierpresentation.php?id='+id,{presentation:presentation},function(donne){

   $('.reponse').html(donne).fadeIn(200,'linear');
    $('.reponse').html(donne).fadeOut(5000,'linear');
 });
return false;
}



function modifieractualite(idr){

  var id = idr;
 var actualite= $('#actualite'+id).val(); 

 $.post('../fonction/modifieractualite.php?id='+id,{actualite:actualite},function(donne){

   $('.reponse').html(donne).fadeIn(200,'linear');
    $('.reponse').html(donne).fadeOut(5000,'linear');
 });
return false;
}
	
	

	function deletemenu(str){
 $('.confirm').confirm({


text:"Voulez-vous vraiment supprimer cette ligne?",
title:"Confirmation de suppression",
confirm: function(button){
  var id = str;
  $.ajax({
      type:"GET",
      url:"../fonction/deletemenu.php?id="+id

  }).done(function(){
    afficher_menu();
  });
  },
cancel:function(button){

},


confirmButton:"Oui",
cancelButton:"Non",
post:true,
confirmButtonClass:"btn-danger",
cancelButtonClass:"btn-default",
dialogClass:"modal-dialog modal-sm"


  });
}




	function deleteclumenu(str){
 $('.confirm').confirm({


text:"Voulez-vous vraiment supprimer cette ligne?",
title:"Confirmation de suppression",
confirm: function(button){
  var id = str;
  $.ajax({
      type:"GET",
      url:"../fonction/deleteclubmenu.php?id="+id

  }).done(function(){
    afficher_clubmenu();
  });
  },
cancel:function(button){

},


confirmButton:"Oui",
cancelButton:"Non",
post:true,
confirmButtonClass:"btn-danger",
cancelButtonClass:"btn-default",
dialogClass:"modal-dialog modal-sm"


  });
}




	function deletegallerierestau(str){
 $('.confirm').confirm({


text:"Voulez-vous vraiment supprimer cette ligne?",
title:"Confirmation de suppression",
confirm: function(button){
  var id = str;
  $.ajax({
      type:"GET",
      url:"../fonction/deletegallerierestau.php?id="+id

  }).done(function(){
    afficher_gallerierestau();
  });
  },
cancel:function(button){

},


confirmButton:"Oui",
cancelButton:"Non",
post:true,
confirmButtonClass:"btn-danger",
cancelButtonClass:"btn-default",
dialogClass:"modal-dialog modal-sm"


  });
}





	function deleteclubhomegallerie(str){
 $('.confirm').confirm({


text:"Voulez-vous vraiment supprimer cette ligne?",
title:"Confirmation de suppression",
confirm: function(button){
  var id = str;
  $.ajax({
      type:"GET",
      url:"../fonction/deleteclubhomegallerie.php?id="+id

  }).done(function(){
    afficher_clubhomegallerie();
  });
  },
cancel:function(button){

},


confirmButton:"Oui",
cancelButton:"Non",
post:true,
confirmButtonClass:"btn-danger",
cancelButtonClass:"btn-default",
dialogClass:"modal-dialog modal-sm"


  });
}
	
	
	
	
	
	function deleteclubevent(str){
 $('.confirm').confirm({


text:"Voulez-vous vraiment supprimer cette ligne?",
title:"Confirmation de suppression",
confirm: function(button){
  var id = str;
  $.ajax({
      type:"GET",
      url:"../fonction/deleteclubevent.php?id="+id

  }).done(function(){
    afficher_clubevent();
  });
  },
cancel:function(button){

},


confirmButton:"Oui",
cancelButton:"Non",
post:true,
confirmButtonClass:"btn-danger",
cancelButtonClass:"btn-default",
dialogClass:"modal-dialog modal-sm"


  });
}
	
	
	
	
	function deletestar(str){
 $('.confirm').confirm({


text:"Voulez-vous vraiment supprimer cette ligne?",
title:"Confirmation de suppression",
confirm: function(button){
  var id = str;
  $.ajax({
      type:"GET",
      url:"../fonction/deletestar.php?id="+id

  }).done(function(){
    afficher_star();
  });
  },
cancel:function(button){

},


confirmButton:"Oui",
cancelButton:"Non",
post:true,
confirmButtonClass:"btn-danger",
cancelButtonClass:"btn-default",
dialogClass:"modal-dialog modal-sm"


  });
}
	
	
	
	
		
	function deleteclubmedia(str){
 $('.confirm').confirm({


text:"Voulez-vous vraiment supprimer cette ligne?",
title:"Confirmation de suppression",
confirm: function(button){
  var id = str;
  $.ajax({
      type:"GET",
      url:"../fonction/deleteclubmedia.php?id="+id

  }).done(function(){
    afficher_clubmedia();
  });
  },
cancel:function(button){

},


confirmButton:"Oui",
cancelButton:"Non",
post:true,
confirmButtonClass:"btn-danger",
cancelButtonClass:"btn-default",
dialogClass:"modal-dialog modal-sm"


  });
}
	


		function deleteinfo(str){
 $('.confirm').confirm({


text:"Voulez-vous vraiment supprimer cette ligne?",
title:"Confirmation de suppression",
confirm: function(button){
  var id = str;
  $.ajax({
      type:"GET",
      url:"../fonction/deleteinfo.php?id="+id

  }).done(function(){
    afficher_info();
  });
  },
cancel:function(button){

},


confirmButton:"Oui",
cancelButton:"Non",
post:true,
confirmButtonClass:"btn-danger",
cancelButtonClass:"btn-default",
dialogClass:"modal-dialog modal-sm"


  });
}




		function deletetextdetente(str){
 $('.confirm').confirm({


text:"Voulez-vous vraiment supprimer cette ligne?",
title:"Confirmation de suppression",
confirm: function(button){
  var id = str;
  $.ajax({
      type:"GET",
      url:"../fonction/deletetextdetente.php?id="+id

  }).done(function(){
    afficher_textdetente();
  });
  },
cancel:function(button){

},


confirmButton:"Oui",
cancelButton:"Non",
post:true,
confirmButtonClass:"btn-danger",
cancelButtonClass:"btn-default",
dialogClass:"modal-dialog modal-sm"


  });
}





		function deletetextjeu(str){
 $('.confirm').confirm({


text:"Voulez-vous vraiment supprimer cette ligne?",
title:"Confirmation de suppression",
confirm: function(button){
  var id = str;
  $.ajax({
      type:"GET",
      url:"../fonction/deletetextjeu.php?id="+id

  }).done(function(){
    afficher_textjeu();
  });
  },
cancel:function(button){

},


confirmButton:"Oui",
cancelButton:"Non",
post:true,
confirmButtonClass:"btn-danger",
cancelButtonClass:"btn-default",
dialogClass:"modal-dialog modal-sm"


  });
}






		function deletepub(str){
 $('.confirm').confirm({


text:"Voulez-vous vraiment supprimer cette ligne?",
title:"Confirmation de suppression",
confirm: function(button){
  var id = str;
  $.ajax({
      type:"GET",
      url:"../fonction/deletepub.php?id="+id

  }).done(function(){
    afficher_admin();
  });
  },
cancel:function(button){

},


confirmButton:"Oui",
cancelButton:"Non",
post:true,
confirmButtonClass:"btn-danger",
cancelButtonClass:"btn-default",
dialogClass:"modal-dialog modal-sm"


  });
}



		function deletegrandegallerie(str){
 $('.confirm').confirm({


text:"Voulez-vous vraiment supprimer cette ligne?",
title:"Confirmation de suppression",
confirm: function(button){
  var id = str;
  $.ajax({
      type:"GET",
      url:"../fonction/deletegrandegallerie.php?id="+id

  }).done(function(){
    afficher_grandegallerie();
  });
  },
cancel:function(button){

},


confirmButton:"Oui",
cancelButton:"Non",
post:true,
confirmButtonClass:"btn-danger",
cancelButtonClass:"btn-default",
dialogClass:"modal-dialog modal-sm"


  });
}





		function deletebar(str){
 $('.confirm').confirm({


text:"Voulez-vous vraiment supprimer cette ligne?",
title:"Confirmation de suppression",
confirm: function(button){
  var id = str;
  $.ajax({
      type:"GET",
      url:"../fonction/deletebar.php?id="+id

  }).done(function(){
    afficher_bar();
  });
  },
cancel:function(button){

},


confirmButton:"Oui",
cancelButton:"Non",
post:true,
confirmButtonClass:"btn-danger",
cancelButtonClass:"btn-default",
dialogClass:"modal-dialog modal-sm"


  });
}



	function deletetextfete(str){
 $('.confirm').confirm({


text:"Voulez-vous vraiment supprimer cette ligne?",
title:"Confirmation de suppression",
confirm: function(button){
  var id = str;
  $.ajax({
      type:"GET",
      url:"../fonction/deletetextfete.php?id="+id

  }).done(function(){
    afficher_textfete();
  });
  },
cancel:function(button){

},


confirmButton:"Oui",
cancelButton:"Non",
post:true,
confirmButtonClass:"btn-danger",
cancelButtonClass:"btn-default",
dialogClass:"modal-dialog modal-sm"


  });
}




	function deletegalleriemodule(str){
 $('.confirm').confirm({


text:"Voulez-vous vraiment supprimer cette ligne?",
title:"Confirmation de suppression",
confirm: function(button){
  var id = str;
  $.ajax({
      type:"GET",
      url:"../fonction/deletegalleriemodule.php?id="+id

  }).done(function(){
    afficher_galleriemodule();
  });
  },
cancel:function(button){

},


confirmButton:"Oui",
cancelButton:"Non",
post:true,
confirmButtonClass:"btn-danger",
cancelButtonClass:"btn-default",
dialogClass:"modal-dialog modal-sm"


  });
}





		function deletemessage(str){
 $('.confirm').confirm({


text:"Voulez-vous vraiment supprimer cette ligne?",
title:"Confirmation de suppression",
confirm: function(button){
  var id = str;
  $.ajax({
      type:"GET",
      url:"../fonction/deletemessage.php?id="+id

  }).done(function(){
    afficher_message();
  });
  },
cancel:function(button){

},


confirmButton:"Oui",
cancelButton:"Non",
post:true,
confirmButtonClass:"btn-danger",
cancelButtonClass:"btn-default",
dialogClass:"modal-dialog modal-sm"


  });
}




		function deletemsgrestau(str){
 $('.confirm').confirm({


text:"Voulez-vous vraiment supprimer cette ligne?",
title:"Confirmation de suppression",
confirm: function(button){
  var id = str;
  $.ajax({
      type:"GET",
      url:"../fonction/deletemsgrestau.php?id="+id

  }).done(function(){
    afficher_msgrestau();
  });
  },
cancel:function(button){

},


confirmButton:"Oui",
cancelButton:"Non",
post:true,
confirmButtonClass:"btn-danger",
cancelButtonClass:"btn-default",
dialogClass:"modal-dialog modal-sm"


  });
}





		function deleteactualite(str){
 $('.confirm').confirm({


text:"Voulez-vous vraiment supprimer cette ligne?",
title:"Confirmation de suppression",
confirm: function(button){
  var id = str;
  $.ajax({
      type:"GET",
      url:"../fonction/deleteactualite.php?id="+id

  }).done(function(){
    afficher_actualite();
  });
  },
cancel:function(button){

},


confirmButton:"Oui",
cancelButton:"Non",
post:true,
confirmButtonClass:"btn-danger",
cancelButtonClass:"btn-default",
dialogClass:"modal-dialog modal-sm"


  });
}




		function deleteevent(str){
 $('.confirm').confirm({


text:"Voulez-vous vraiment supprimer cette ligne?",
title:"Confirmation de suppression",
confirm: function(button){
  var id = str;
  $.ajax({
      type:"GET",
      url:"../fonction/deleteevent.php?id="+id

  }).done(function(){
    afficher_event();
  });
  },
cancel:function(button){

},


confirmButton:"Oui",
cancelButton:"Non",
post:true,
confirmButtonClass:"btn-danger",
cancelButtonClass:"btn-default",
dialogClass:"modal-dialog modal-sm"


  });
}




		function deleteactuclub(str){
 $('.confirm').confirm({


text:"Voulez-vous vraiment supprimer cette ligne?",
title:"Confirmation de suppression",
confirm: function(button){
  var id = str;
  $.ajax({
      type:"GET",
      url:"../fonction/deleteactuclub.php?id="+id

  }).done(function(){
    afficher_clubactu();
  });
  },
cancel:function(button){

},


confirmButton:"Oui",
cancelButton:"Non",
post:true,
confirmButtonClass:"btn-danger",
cancelButtonClass:"btn-default",
dialogClass:"modal-dialog modal-sm"


  });
}

function showLoader(div){
	$(div).append('<div class="loader">Chargement.....Veuilliez patienter</div>');
	$('.loader').fadeTo(500,0.5);
}

function hideLoader(){

$(".loader").fadeOut(500,function(){

	$(".loader").remove();
});

}


		function deletepresentation(str){
 $('.confirm').confirm({


text:"Voulez-vous vraiment supprimer cette ligne?",
title:"Confirmation de suppression",
confirm: function(button){
  var id = str;
  $.ajax({
      type:"GET",
      url:"../fonction/deletepresentation.php?id="+id

  }).done(function(){
    afficher_presentation();
  });
  },
cancel:function(button){

},


confirmButton:"Oui",
cancelButton:"Non",
post:true,
confirmButtonClass:"btn-danger",
cancelButtonClass:"btn-default",
dialogClass:"modal-dialog modal-sm"


  });
}



		function deleteactualite(str){
 $('.confirm').confirm({


text:"Voulez-vous vraiment supprimer cette ligne?",
title:"Confirmation de suppression",
confirm: function(button){
  var id = str;
  $.ajax({
      type:"GET",
      url:"../fonction/deleteactualite.php?id="+id

  }).done(function(){
    afficher_actualite();
  });
  },
cancel:function(button){

},


confirmButton:"Oui",
cancelButton:"Non",
post:true,
confirmButtonClass:"btn-danger",
cancelButtonClass:"btn-default",
dialogClass:"modal-dialog modal-sm"


  });
}
		 setInterval('load_message()',500);
 function load_message(){
	 $('.nbmsg').load('../fonction/getdemandereservation.php');
 }

		</script>
		
</body>
</html>
<?php
}else{
	echo "resevé";
}
}else{
	echo'<center><h1 style="color:red">Accès interdit sans identification</h1></center>';
	echo'<center><a href="../admin.php"><b>S\'identifier</b></a></center>';
}
}else{
	echo'<center><h1 style="color:red">Accès interdit sans identification</h1></center>';
	echo'<center><a href="../admin.php"><br>S\'identifier</b></a></center>';
}