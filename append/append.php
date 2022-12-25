<?php

$mysqli = new mysqli("127.0.0.1", "root", "", "products");

// echo empty($_POST['name']);
// echo empty($_POST['count']);
// echo empty($_POST['cost']);
// echo empty($_POST['location']);
// echo empty($_POST['saller']);
// echo empty($_POST['img']);
if (
    isset($_POST['sumbit']) && (
    empty($_POST['name']) ||
    empty($_POST['count']) ||
    empty($_POST['cost']) ||
    empty($_POST['location']) ||
    empty($_POST['saller']) ||
    empty($_POST['img']))
) header("Location: ../?code=2");
if (isset($_POST['sumbit'])) {
    $sql = "INSERT INTO `products` (`id`, `name`, `count`, `cost`, `location`, `saller`, `img`) VALUES (
        NULL, '".$_POST['name']."', '".$_POST['count']."', '".$_POST['cost']."', '".$_POST['location']."', '".$_POST['saller']."', '".$_POST['img']."');";
    echo $sql;
    if ($mysqli->query($sql) === true) {
        header("Location: ../?code=3");
    } else header("Location: ../?code=4");
}












//


