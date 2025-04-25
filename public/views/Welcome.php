<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="public/assets/css/style.css">
</head>

<body>
<div class="container">
  <h1>📝 Ma To-Do List</h1>

  <!-- Formulaire d'ajout -->
  <form action="" method="POST" class="form">
    <input class="input" type="text" name="name" placeholder="Ajouter une nouvelle tâche..." required>
    <button class="btn add" type="submit">Ajouter</button>
  </form>

  <!-- Liste des tâches -->
  <h2>📋 Liste des tâches</h2>
  <ul class="task-list">
    <?php if (!empty($tasks)): ?>
      <?php foreach ($tasks as $task): ?>
        <li class="task-item">
          <span class="task-name"><?= htmlspecialchars($task['name']); ?></span>
          
          <!-- Formulaire de suppression -->
          <form method="POST" action="" class="form-inline">
            <input type="hidden" name="id" value="<?= $task['id']; ?>">
            <button class="btn delete" type="submit">🗑️</button>
          </form>

          <!-- Formulaire de mise à jour -->
          <form method="POST" class="form-inline">
            <input type="hidden" name="Updateid" value="<?= $task['id']; ?>">
            <input class="input small" type="text" name="Newname" placeholder="Nouveau nom" value="<?= htmlspecialchars($task['name']); ?>" required>
            <button class="btn update" type="submit">🔄</button>
          </form>
        </li>
      <?php endforeach; ?>
    <?php else: ?>
      <p>Aucune tâche à afficher.</p>
    <?php endif; ?>
  </ul>
</div>
</body>

</html>