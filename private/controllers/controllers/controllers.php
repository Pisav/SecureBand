<?php
function homepage(){
  $statement =  get_article();
  include 'views/homepage.php';
}


 function wedstrijden(){
   $statement = get_wedstrijd();
   include 'views/wedstrijden.php';
 }

 function stadion(){
   $statement = get_stadion();
   include 'views/stadion.php';
 }

 function speler(){
   //Haal hier speler get_speler($_GET[íd'])
 }

  ?>
