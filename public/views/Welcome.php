<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <form action="" method="POST">
      <input type="text" name="name" placeholder="Placer le nom de votre tâche...">
      <button type="submit">Ajouter tâche</button>
    </form>

    <h2>Voici la liste de tâche</h2>

    <ul>
    <?php if (!empty($tasks)): ?>
        <?php foreach ($tasks as $task): ?>
            <li><?= htmlspecialchars($task['name']); ?><button>supprimer</button></li>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Aucune tâche à afficher.</p>
    <?php endif; ?>
</ul>
</body>
</html>