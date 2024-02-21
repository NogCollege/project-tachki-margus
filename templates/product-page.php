<?php
require_once "controllers/connect.php";

$query = "SELECT * FROM catalog";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
$result = '';
?>

<div class="product-page">
    <div class="wrapper-product">
        <div class="title-product">
            <h1>Наш<br class="display_none"> автопарк</h1>
            <form action="#">
                <button class="btn-product">Смотреть все</button>
            </form>
        </div>
        <div class="category-product">
            <button class="categoty-linkProduct" data-category="Внедорожник">
                <img src="templates/img/item-category1.png" alt="">
                <p>Внедорожники</p>
            </button>
            <button class="categoty-linkProduct" data-category="Бизнес">
                <img src="templates/img/item-category2.png" alt="">
                <p>Бизнес</p>
            </button>
            <button class="categoty-linkProduct" data-category="Спорт">
                <img src="templates/img/item-category3.png" alt="">
                <p>Спорткар</p>
            </button>
            <button class="categoty-linkProduct" data-category="Премиум">
                <img src="templates/img/item-category4.png" alt="">
                <p>Премиум</p>
            </button>
            <button class="categoty-linkProduct" data-category="Комфорт">
                <img src="templates/img/item-category5.png" alt="">
                <p>Комфорт</p>
            </button>
        </div>
        <div class="items-product">
            <?php 
            foreach ($data as $elem) {
                $result .= '<div class="item-product ' . $elem['catagery'] . '">';
                $result .= '<div class="city-itemProduct">'.$elem['city'].'</div>';
                $result .= '<div class="image-itemProduct"><img src="templates/img/cars/' . $elem['id'] . '-' . $elem['name'] . '/main.jpg" alt=""></div>';
                $result .= '<div class="title-itemProduct">'.$elem['full name'].'</div>';
                $result .= '<div class="subtitle-itemProduct">';
                $result .= '    <div class="consumption-itemProduct">';
                $result .= '        <img src="templates/img/consumption.png" alt="" class="icon-consumption">';
                $result .= '        <p class="text-consumption">'.$elem['engine capacity'].' л/бензин</p>';
                $result .= '    </div>';
                $result .= '    <div class="power-itemProduct">';
                $result .= '        <img src="templates/img/power.png" alt="" class="icon-power">';
                $result .= '        <p class="text-power">'.$elem['engine power'].' л.с.</p>';
                $result .= '    </div>';
                $result .= '</div>';
                $result .= '<div class="hr-itemProduct display_block"></div>';
                $result .= '<div class="sublock-itemProduct">';
                $result .= '    <form action="reservation.php">';
                $result .= '        <button class="btn-itemProduct">Забронировать</button>';
                $result .= '    </form>';
                $result .= '    <p class="price-itemProduct">от <span class="span-price">7150</span> руб/сут.</p>';
                $result .= '</div>';
                $result .= '</div>';
            }
            echo $result;
            ?>
        </div>
        <div class="subblock-informationProduct">
            <h1 class="title-informationProduct">
                Москва известна своими величественными аллеями, роскошными торговыми<br> центрами и впечатляющей
                архитектурой. В таком окружении неудивительно, что<br> спрос на аренду элитных автомобилей в Москве
                растет с каждым годом.
            </h1>
            <p class="subtitle-infomationProduct">
                Эти роскошные автомобили стали неотъемлемой частью жизни успешных бизнесменов, звезд шоу-бизнеса и
                просто людей,<br> стремящихся испытать неповторимые ощущения от комфорта и мощи.
            </p>
        </div>
    </div>
</div>
