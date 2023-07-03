<?php

declare(strict_types=1);

session_start();

echo '<p>Здравствуй, ' . $_SESSION['name'] . '!</p>';