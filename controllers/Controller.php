<!-- Fichier avec les fonction principal -->

<?php

function AddTask()
{
  $name = $_POST['name'];

  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($name)) {
    require __DIR__ . "/../models/bddConnect.php";
    $stmt = $bdd->prepare("INSERT INTO todo (name) VALUES (:name)");
    $stmt->bindParam(":name", $name);



    if ($stmt->execute()) {
      echo "Vous avez crée une nouvelle tâche";
      header('Location: ' . $_SERVER["PHP_SELF"] . "?page=home");
      exit();
    } else {
      echo "Vous n'avez pas crée de nouvelle tâche";
    }
  }
}

function ReadTask()
{
  require __DIR__ . "/../models/bddConnect.php";

  $stmt = $bdd->prepare("SELECT * FROM todo");
  $stmt->execute();
  $task = $stmt->fetchAll(PDO::FETCH_ASSOC); // sa return un tableau

  return $task;
}

function DeleteTask()
{

  $button = $_POST['id'];

  if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($button)) {
    require __DIR__ . "/../models/bddConnect.php";
    $stmt = $bdd->prepare("DELETE FROM todo WHERE id = :id");
    $stmt->bindParam(':id', $button);


    if ($stmt->execute()) {
      echo "Tâche bien supprimer";
      header("Location: " . $_SERVER["PHP_SELF"] . "?page=home");
      exit();
    } else {
      echo "Tâche non supprimer";
    }
  }
}

function UpdateTask()
{

  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Updateid']) && isset($_POST['Newname'])) {
    require __DIR__ . "/../models/bddConnect.php";
    $id = $_POST['Updateid'];
    $NewName = $_POST['Newname'];

    $stmt = $bdd->prepare("UPDATE todo SET name = :name WHERE id = :id");
    $stmt->bindParam(':name', $NewName);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
      echo "La tâche a bien été update";
      header("Location: " . $_SERVER["PHP_SELF"] . "?page=home");
      exit();
    } else {
      echo "Tâche non update";
    }
  }
}
?>