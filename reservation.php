<?php
require_once "./controllers/head.php";
require_once "templates/header-page.php";
?>

<div class="slideshow-container slider-container">
    <div class="swiper-wrapper slider">
        <img class="slide block" src="templates/img/cars/1-BMW/main.jpg" alt="">
        <img class="slide" src="templates/img/cars/1-BMW/BMW_1.jpg" alt="">
        <img class="slide" src="templates/img/cars/1-BMW/BMW_2.jpg" alt="">
        <img class="slide" src="templates/img/cars/1-BMW/BMW_3.jpg" alt="">
        <img class="slide" src="templates/img/cars/1-BMW/BMW_4.jpg" alt="">
    </div>
    <a onclick="plusSlides(-1)" class="prev-button">&#10094</a>
    <a onclick="plusSlides(1)" class="next-button">&#10095</a>
</div>

<?
require_once 'controllers/create_folders.php';
require_once "templates/footer-page.php";
require_once "controllers/javascript.php";
?>