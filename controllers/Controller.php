<!-- Fichier avec les fonction principal -->

<?php 

  function AddTask(){
    $name = $_POST['name'];

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($name)) {
      require __DIR__ . "/../models/bddConnect.php";
      $stmt = $bdd->prepare("INSERT INTO todo (name) VALUES (:name)");
      $stmt->bindParam(":name", $name);

      
      
      if ($stmt->execute()) {
        echo "Vous avez crée une nouvelle tâche";
        header('Location: ' . $_SERVER["PHP_SELF"] . "?page=home");
        exit();
      }else{
        echo "Vous n'avez pas crée de nouvelle tâche";
      }
    }
  }

  function ReadTask(){
    require __DIR__ . "/../models/bddConnect.php";

    $stmt = $bdd->prepare("SELECT * FROM todo");
    $stmt->execute();
    $task = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $task;
  }

  function DeleteTask(){

  }

  function UpdateTask(){

  }
?>