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
        <li><?= htmlspecialchars($task['name']); ?>
          <form method="POST" action="">
            <input type="hidden" name="id" value="<?= $task['id']; ?>">
            <button type="submit">Supprimer</button>
          </form>
          <form method="POST">
            <input type="hidden" name="Updateid" value="<?= $task['id']; ?>">
            <input type="text" name="Newname" placeholder="Entez un nouveau nom de tâche" value="<?= htmlspecialchars($task['name']); ?>">
            <button type="submit">Modifier</button>
          </form>
        </li>
      <?php endforeach; ?>
    <?php else: ?>
      <p>Aucune tâche à afficher.</p>
    <?php endif; ?>
  </ul>
</body>

</html>