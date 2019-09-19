<?php
function get_latest_plants(){
  $pdo = dbConnect();
  $query     = 'SELECT * FROM `article`  ';
  $statement = $pdo->query( $query );

 return $statement;
}
?>



<?php
function get_article(){
  $pdo = dbConnect();

  $query     = 'SELECT * FROM `article` ';
  $statement = $pdo->query( $query );

  return $statement;
}
 ?>

 <?php
 function get_stadion(){
   $pdo = dbConnect();

   $query     = 'SELECT * FROM `stadion` ';
   $statement = $pdo->query( $query );

   return $statement;
 }
  ?>

  <?php
  function get_wedstrijd(){
    $pdo = dbConnect();

    $query     = 'SELECT * FROM `wedstrijden` ';
    $statement = $pdo->query( $query );

    return $statement;
  }
   ?>
