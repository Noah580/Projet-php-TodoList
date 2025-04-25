<!-- Fichier pour les routes -->

<?php
require "./controllers/Router.php";

if (isset($_GET["page"]) && !empty($_GET["page"])) {
  $page = htmlspecialchars($_GET["page"]);

  if ($page == "home") {
    displayHome();
  } else {
    Display404();
  }
}

?>