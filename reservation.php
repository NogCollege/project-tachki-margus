<?php
require_once "./controllers/connect.php";
require_once "./controllers/head.php";
require_once "templates/header-page.php";

$id = $_GET["id"];
$query = "SELECT * FROM catalog WHERE id = $id";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$data = mysqli_fetch_assoc($result);

?>
<div class="slide_contain">
    <div class="slideshow-container">
        <h1>
            <?
            // echo $data["full name"]
            ?>
        </h1>
        <!-- <div class="mySlides">
            <img class="fade" src="templates/img/cars/1-BMW/main.jpg" alt="">
        </div>
        <div class="mySlides">
            <img class="fade" src="templates/img/cars/1-BMW/BMW_1.jpg" alt="">
        </div>
        <div class="mySlides">
            <img class="fade" src="templates/img/cars/1-BMW/BMW_2.jpg" alt="">
        </div>
        <div class="mySlides">
            <img class="fade" src="templates/img/cars/1-BMW/BMW_3.jpg" alt="">
        </div>
        <div class="mySlides">
            <img class="fade" src="templates/img/cars/1-BMW/BMW_4.jpg" alt="">
        </div> -->
        <?php
        $dir = 'templates/img/cars/' . $data['id'] . '-' . $data['name'] . '';
        $files = scandir($dir);
        foreach ($files as $file) {
            $file_path = $dir . '/' . $file;
            if (is_file($file_path) && in_array(pathinfo($file_path, 
                PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif'])) {
                echo '<div class="mySlides">
                        <img class="fade" src="' . $file_path . '" alt="">
                    </div>';
            }
        }
        ?>

        <a href="#" onclick="plusSlides(-1)" class="prev">&#10094</a>
        <a href="#" onclick="plusSlides(1)" class="next">&#10095</a>
    </div>
</div>
<?
// require_once 'controllers/create_folders.php';
require_once "templates/footer-page.php";
require_once "controllers/slideJS.php";
?>