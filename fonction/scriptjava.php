
<script>

$('.form_membre').submit(function(){
 var nom = $('#nom').val();
 var prenom = $('#prenom').val();
 var tel = $('#tel').val();
 var ident = $('#ident').val();
  var poste = $('#poste').val();

 $.post('fonction/addcontact.php',{nom:nom, prenom:prenom, ident:ident, tel:tel, poste:poste},function(donnes){
   $('#exampleModal').modal('hide');
   $('#info').modal();
   $('#infotxt')[0].innerText =donnes;
   $('#infotitre')[0].innerText = "Ajout membre";
  afficher_membre();
   var nom = $('#nom').val('');
   var prenom = $('#prenom').val('');
   var tel = $('#tel').val('');
    var ident = $('#ident').val('');
    var poste = $('#poste').val('');
 });
 return false;
});


$('.form_entreprise').submit(function(){
 var noment = $('#noment').val();
 var vilent = $('#vilent').val();
 var codpost = $('#codpost').val();
  var telent = $('#telent').val();

 $.post('fonction/addentreprise.php',{noment:noment, vilent:vilent, codpost:codpost, telent:telent},function(donnes){
  $('#exampleModal').modal('hide');
  $('#info').modal();
  $('#infotxt')[0].innerText =donnes;
  $('#infotitre')[0].innerText = "Ajout entreprise";
  afficher_entreprise();
  var nom = $('#noment').val('');
  var prenom = $('#vilent').val('');
  var tel = $('#codpost').val('');
  var tel = $('#telent').val('');
 });
 return false;
});

function afficher_membre(){
$.ajax({
type: "GET",
url:"fonction/getinfo.php"

}).done(function(data){
$('#viewmembre').html(data);
});
}


function afficher_carnet(){
$.ajax({
type: "GET",
url:"fonction/getcarnet.php"

}).done(function(data){
$('#viewcarnet').html(data);
});
}



function afficher_entreprise(){
$.ajax({
type: "GET",
url:"fonction/getentreprise.php"

}).done(function(data){
$('#viewentreprise').html(data);
});
}

function detail(idr){
  var id=idr
$.ajax({
type: "GET",
url:"fonction/getdetail.php?id="+id

}).done(function(data){
$('#viewdetail').html(data);
});
}

function modifierinfo(idr){

 var id = idr;
var nom= $('#nom'+id).val();
 var prenom= $('#prenom'+id).val();
 var tel= $('#tel'+id).val();
  var poste= $('#poste'+id).val();
  var newident= $('#newident'+id).val();

$.post('fonction/modifierinfo.php?id='+id,{nom:nom, prenom:prenom,tel:tel,id:id, newident:newident, poste:poste},function(donne){
  $('.modalremove').modal('hide');
  $('#info').modal();
  $('#infotxt')[0].innerText =donne;
  $('#infotitre')[0].innerText = "Modification membre";
});

}


function modifierentreprise(idr){

 var id = idr;
var noment= $('#noment'+id).val();
 var vilent= $('#vilent'+id).val();
  var telent= $('#telent'+id).val();
 var codpost= $('#codpost'+id).val();

$.post('fonction/modifierentreprise.php?id='+id,{noment:noment, vilent:vilent, telent:telent, codpost:codpost,id:id},function(donne){
  $('.modalremove').modal('hide');
  $('#info').modal();
  $('#infotxt')[0].innerText =donne;
  $('#infotitre')[0].innerText = "Modification entreprise";
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
   url:"fonction/deleteinfo.php?id="+id

}).done(function(){
 afficher_membre();
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


function deleteent(str){
$('.confirm').confirm({


text:"Voulez-vous vraiment supprimer cette ligne?",
title:"Confirmation de suppression",
confirm: function(button){
var id = str;
$.ajax({
   type:"GET",
   url:"fonction/deleteent.php?id="+id

}).done(function(){
 afficher_entreprise();
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



</script>
