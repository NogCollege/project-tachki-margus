<link rel="stylesheet" href="templates/css/adminStyle.css">

<table>
    <tr class="info">
        <td class="info_tableMin">id</td>
        <td class="info_tableMin">rent_able</td>
        <td class="info_tableAdmin">name</td>
        <td class="info_tableAdmin">city</td>
        <td class="info_tableAdmin">category</td>
        <td class="info_tableAdmin">fullname</td>
        <td class="info_tableAdmin">engine_type</td>
        <td class="info_tableAdmin">engine_volume</td>
        <td class="info_tableAdmin">horse_power</td>
        <td class="info_tableAdmin">price_max</td>
        <td class="info_tableAdmin">price_mid</td>
        <td class="info_tableAdmin">price_min</td>
        <td class="info_tableFull">full_desc</td>
        <td class="info_tableButton">picture</td>
        <td class="info_tableButton">delete</td>
    </tr>

    <?php
    foreach ($data as $elem) {
        $result .= '<tr class="info">';
        $result .= '<td class="info_tableAdmin">' . $elem['id'] . '</td>';
        $result .= '<td class="info_tableAdmin">' . $elem['available_for_rent'] . '</td>';
        $result .= '<td class="info_tableAdmin">' . $elem['name'] . '</td>';
        $result .= '<td class="info_tableAdmin">' . $elem['city'] . '</td>';
        $result .= '<td class="info_tableAdmin">' . $elem['catagery'] . '</td>';
        $result .= '<td class="info_tableAdmin">' . $elem['full_name'] . '</td>';
        $result .= '<td class="info_tableAdmin">' . $elem['engines_type'] . '</td>';
        $result .= '<td class="info_tableAdmin">' . $elem['engine_capacity'] . '</td>';
        $result .= '<td class="info_tableAdmin">' . $elem['engine_power'] . '</td>';
        $result .= '<td class="info_tableAdmin">' . $elem['maximum_price'] . '</td>';
        $result .= '<td class="info_tableAdmin">' . $elem['average_price'] . '</td>';
        $result .= '<td class="info_tableAdmin">' . $elem['minimum_price'] . '</td>';
        $result .= '<td class="info_tableFull">' . $elem['full_description'] . '</td>';
        $result .= '<td><a href="picture.php?id=' . $elem['id'] . '">Фотографии</a></td>';
        $result .= '<td><a href="?del=' . $elem['id'] . '">Удалить</td>';
        $result .= '</tr>';
    }
    echo $result;
    ?>
    <?php
    if (isset($_GET['del'])) {
        $del = $_GET['del'];

        $query = "INSERT INTO deleted SELECT * FROM catalog WHERE id = '$del'";
        mysqli_query($link, $query) or die(mysqli_error($link));

        $query = "DELETE FROM catalog where id = '$del'";
        mysqli_query($link, $query) or die(mysqli_error($link));
    }
    ?>
    <?php
    if (!empty($_POST)) {
        $available_for_rent = $_POST['available_for_rent'];
        $name = $_POST['name'];
        $city = $_POST['city'];
        $catagery = $_POST['catagery'];
        $full_name = $_POST['full_name'];
        $engines_type = $_POST['engines_type'];
        $engine_capacity = $_POST['engine_capacity'];
        $engine_power = $_POST['engine_power'];
        $maximum_price = $_POST['maximum_price'];
        $average_price = $_POST['average_price'];
        $minimum_price = $_POST['minimum_price'];
        $full_description = $_POST['full_description'];

        $query = "INSERT INTO catalog SET available_for_rent='$available_for_rent', name='$name', city='$city', catagery='$catagery', full_name='$full_name', engines_type='$engines_type', engine_capacity='$engine_capacity', engine_power='$engine_power', maximum_price='$maximum_price', average_price='$average_price', minimum_price='$minimum_price', full_description='$full_description'";
        mysqli_query($link, $query) or die(mysqli_error($link));
    }
    ?>


</table>
<form class="form_add" action="" method="POST">
    <td><input class="info_tableMin" type="hidden" name="id"></td>
    <td><input class="info_tableMin" type="number" name="available_for_rent"></td>
    <td><input class="info_tableAdmin" type="text" name="name"></td>
    <td><input class="info_tableAdmin" type="text" name="city"></td>
    <td><input class="info_tableAdmin" type="text" name="catagery"></td>
    <td><input type="text" name="full_name"></td>
    <td><input class="info_tableAdmin" type="text" name="engines_type"></td>
    <td><input class="info_tableAdmin" type="number" name="engine_capacity"></td>
    <td><input class="info_tableAdmin" type="number" name="engine_power"></td>
    <td><input class="info_tableAdmin" type="number" name="maximum_price"></td>
    <td><input class="info_tableAdmin" type="number" name="average_price"></td>
    <td><input class="info_tableAdmin" type="number" name="minimum_price"></td>
    <td><input type="text" name="full_description"></td>
    <td><input type="submit" value="Добавить"></td>
</form>

<!-- <input name="upload[]" type="file" multiple="multiple"><br> -->

<?
// $uploadDir = 'templates/img/cars/';
//if ($_FILES) {
//    $files = array_filter($_FILES['upload']['name']);
//    $total = count($_FILES['upload']['name']);
//    for ($i = 0; $i < $total; $i++) {
//        $tmpFilePath = $_FILES['upload']['tmp_name'][$i];
//        if ($tmpFilePath != "") {
//            $newFilePath = $uploadDir . $_FILES['upload']['name'][$i];
//            if (!file_exists($newFilePath)) {
//                move_uploaded_file($tmpFilePath, $newFilePath);
//                echo $_FILES['upload']['name'][$i] . ' успешно загружен в папку ' .
//                    $uploadDir . '<br>';
//            } else {
//                echo 'Файл ' . $_FILES['upload']['name'][$i] . ' уже существует!';
//            }
//        }
//    }
//}
?>