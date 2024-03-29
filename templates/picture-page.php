<div class="pictures">
    <?php
    $id = $_GET['id'];
    $query = "SELECT * FROM catalog WHERE id = $id";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    $data = mysqli_fetch_assoc($result);

    $dir = 'templates/img/cars/' . $data['id'] . '-' . $data['name'] . '';
    $files = scandir($dir);
    foreach ($files as $file) {
        $file_path = $dir . '/' . $file;
        if (
            is_file($file_path) && in_array(
                pathinfo(
                    $file_path,
                    PATHINFO_EXTENSION
                ),
                ['jpg', 'jpeg', 'png', 'gif']
            )
        ) {
            echo '<div class="picture_block">
                    <img class="picturefade" src="' . $file_path . '" alt="">
                    <form method="post" action="delete_picture.php">
                        <input type="hidden" name="image_path" value="' . $file_path . '">
                        <button type="submit" name="delete_image">Удалить</button>
                    </form>
                </div>';
        }
    }
    ?>
</div>
<div class="input_multiple">
    <?php
    echo '<form action="picture.php?id=' . $data['id'] . '" method="post" enctype="multipart/form-data">';
    echo '    <input name="upload[]" type="file" multiple="multiple">';
    echo '    <input type="submit">';
    echo '</form>';
    $uploadDir = 'templates/img/cars/' . $data['id'] . '-' . $data['name'] . '/';
    if ($_FILES) {
        $files = array_filter($_FILES['upload']['name']);
        $total = count($_FILES['upload']['name']);
        for ($i = 0; $i < $total; $i++) {
            $tmpFilePath = $_FILES['upload']['tmp_name'][$i];
            if ($tmpFilePath != "") {
                $newFilePath = $uploadDir . $_FILES['upload']['name'][$i];
                if (!file_exists($newFilePath)) {
                    move_uploaded_file($tmpFilePath, $newFilePath);
                    echo $_FILES['upload']['name'][$i] . ' успешно загружен в папку ' .
                        $uploadDir . '<br>';
                } else {
                    echo 'Файл ' . $_FILES['upload']['name'][$i] . ' уже существует!';
                }
            }
        }
    }
    ?>
</div>