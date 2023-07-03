<?php 

declare(strict_types=1);

session_start();

$_SESSION['name'] = htmlspecialchars($_POST['author_name']);

header('Location: index.php');
