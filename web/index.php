<?php

declare(strict_types=1);

session_start();

if (isset($_SESSION['name'])) {
    include './aboutMe.php';
    echo '<a href="./exit.php">Выйти</a>';
} else {
    echo '<p>мы пока не знаем кто вы заполните форму</p>';
    include './formName.php';
}
