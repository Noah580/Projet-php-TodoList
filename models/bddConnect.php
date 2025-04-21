<?php
  $servername = "localhost";
  $username = "root";
  $password = "root";

  try {
    $bdd = new PDO("mysql:host=$servername;dbname:=TodoList", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connexion réussi";
  } catch (PDOException $e) {
      echo "Erreur :".$e->getMessage();
  }
?>

