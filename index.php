<!DOCTYPE html>
<html >
<?php
/***************************************************************************************
 *                                Debut balise head                                    *
 ***************************************************************************************/

                              include('fonction/head.php');


/***************************************************************************************
 *                                fin balise head                                    *
 ***************************************************************************************/
 ?>

 <?php
 /***************************************************************************************
  *                                    Body                                             *
  ***************************************************************************************/
  ?>
<body onload="afficher_membre();afficher_entreprise();afficher_carnet()">

  <?php
  include('fonction/info.php');
  /***************************************************************************************
   *                                    Debut du menu navbar                             *
   ***************************************************************************************/


                              include('fonction/menuhaut.php');


  /***************************************************************************************
   *                                    fin du menu navbar                               *
   ***************************************************************************************/
   ?>


   <?php
   /***************************************************************************************
    *                                    Debut div container                              *
    ***************************************************************************************/
    ?>

    <div class="container" style="margin-top:50px">
      <img alt="image" src="3il.png" width="200" height="100">
    <?php
       if(isset($_GET['lien'])){

         $lien = $_GET['lien'];

         if($lien=="entreprise"){

           /***************************************************************************************
            *        Gestion des netreprises (voir fichier entreprise.php du dossier fonction)                  *
            ***************************************************************************************/

                            include('fonction/entreprise.php');


            /***************************************************************************************
            *                                    Fin index                                          *
            ***************************************************************************************/

         }elseif($lien=="membre"){

           /***************************************************************************************
            *        Gestion des membres (voir fichier membre.php du dossier fonction)                  *
            ***************************************************************************************/

                            include('fonction/membre.php');


            /***************************************************************************************
            *                                    Fin index                                          *
            ***************************************************************************************/
         }
       }else{

         /***************************************************************************************
          *                                    accueil (de index)                                  *
          ***************************************************************************************/

                          include('fonction/carnetadresse.php');


          /***************************************************************************************
          *                                    Fin accueil                                          *
          ***************************************************************************************/
       }
      ?>

    </div>


<?php
/***************************************************************************************
*                                    Debut script javascript                            *
***************************************************************************************/
                        include('fonction/scriptjava.php');
 ?>

</body>
<?php
/***************************************************************************************
 *                                 Fin   Body                                             *
 ***************************************************************************************/
 ?>
</html >
