<head>
    <link rel="stylesheet" href="assets/style.css">
</head>
<?php
require_once './config/config.php';
require_once './controllers/TaskController.php';

$controller = new TaskController();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add'])) { 
    $controller->addTask($_POST['title'], $_POST['description']);
}

if (isset($_GET['done'])) {
    $controller->markDone($_GET['done']);
}

if (isset($_GET['delete'])) {
    $controller->delete($_GET['delete']);
}

$controller->showTasks();
?>