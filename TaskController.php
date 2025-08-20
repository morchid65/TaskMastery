<?php
require_once __DIR__ . '/../models/Task.php';

class TaskController {
    public function showTasks() {
        $taskModel = new Task();
        $tasks = $taskModel->getAllTasks();
        include __DIR__ . '/../views/tasks.php';
    }

    public function addTask($title, $description) {
        $taskModel = new Task();
        $taskModel->addTask($title, $description);
        header('Location: index.php');
        exit;
    }

    public function markDone($id) {
        $taskModel = new Task();
        $taskModel->markAsDone($id);
        header('Location: index.php');
        exit;
    }

    public function deleteTask($id) {
        $taskModel = new Task();
        $taskModel->deleteTask($id);
        header('Location: index.php');
        exit;
    }
}