<h2>📋 Liste des tâches</h2>
<form method="POST" action="index.php">
    <input type="text" name="title" placeholder="Titre de la tâche" required>
    <textarea name="description" placeholder="Description"></textarea>
    <button type="submit" name="add">Ajouter</button>
</form>

<ul>
<?php foreach ($tasks as $task): ?>
    <li>
        <strong><?= htmlspecialchars($task['title']) ?></strong><br>
        <?= htmlspecialchars($task['description']) ?><br>
        <em>Status : <?= $task['status'] ?></em><br>
        <?php if ($task['status'] === 'pending'): ?>
            <a href="index.php?done=<?= $task['id'] ?>">✅ Marquer comme faite</a>
        <?php endif; ?>
        <a href="index.php?delete=<?= $task['id'] ?>">🗑️ Supprimer</a>
    </li>
<?php endforeach; ?>
</ul>
