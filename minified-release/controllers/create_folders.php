<?php
require_once 'connect.php';
foreach ($data as $elem){ if (file_exists("templates/img/cars/" . $elem['id'] . '-' . $elem['name'])){ echo ('Эта папка уже существует');} else{ mkdir("templates/img/cars/" . $elem['id'] . '-' . $elem['name']); echo 'Папка создана';}};
?>