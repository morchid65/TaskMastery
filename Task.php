<?php
require_once __DIR__ . '/../config/config.php';

class Task {
    public function getAllTasks() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM tasks ORDER BY created_at DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addTask($title, $description) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO tasks (title, description) VALUES (:title, :description)");
        $stmt->execute([
            ':title' => $title,
            ':description' => $description
        ]);
    }

    public function markAsDone($id) {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE tasks SET status = ''done' WHERE id = :id");
        $stmt->execute([':id' => $id]);
    }

    public function deleteTask($id) {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM tasks WHERE id = :id");
        $stmt->execute([':id' => $id]);
    }
}