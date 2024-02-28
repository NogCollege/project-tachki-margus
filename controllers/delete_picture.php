<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_image']) && isset($_POST['image_path'])) {
    $image_path = $_POST['image_path'];

    if (unlink($image_path)) {
        echo 'Изображение успешно удалено.';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {
        echo 'Ошибка при удалении изображения.';
    }
} else {

    echo 'Некорректный запрос.';
}
?>