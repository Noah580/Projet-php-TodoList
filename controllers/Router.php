<?php
  require __DIR__ . "/./Controller.php";

  function displayHome(){
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      AddTask();
    }

    $tasks = ReadTask();
    
    require __DIR__ . '/../public/views/Welcome.php';
  }

  function Display404(){
    require __DIR__ . "/../public/views/404.php";
  }
?>