<?php
require_once "./controllers/connect.php";
require_once "./controllers/head.php";
require_once "templates/header-page.php";

$id = $_GET['id'];
$query = "SELECT * FROM catalog WHERE id = $id";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$data = mysqli_fetch_assoc($result);

?>
<div class="slide_contain">
    <div class="slider-container">
        <div class="slider">
            <?php
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
                    echo '<img class="fade" src="' . $file_path . '" alt="">';
                }
            }
            ?>
        </div>
        <button class="prev-button" aria-label="Посмотреть предыдущий слайд">&lt;</button>
        <button class="next-button" aria-label="Посмотреть следующий слайд">&gt;</button>
    </div>
    <div class="info_car">
        <h1 class="page-title">
            <? echo $data["full_name"] ?>
        </h1>
        <div class="subtitle_infoCar">
            <h3 class="categoty_car">
                <? echo $data["catagery"] ?>
            </h3>
            <p class="type_engines">Тип двигателя: <? echo $data["engines_type"] ?></p>
            <p class="engine_capacity">Объем двигателя: <? echo $data["engine_capacity"] ?></p>
            <p class="engine_power">Мощность двигателя: <? echo $data["engine_power"] ?></p>
            <p class="full_description"><? echo $data["full_description"] ?></p>
        </div>
    </div>
</div>
</div>
<?
require_once "templates/footer-page.php";
require_once "controllers/slideJS.php";
?>