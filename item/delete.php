<?php

$mysqli = new mysqli("127.0.0.1", "root", "", "products");


if ($mysqli->query("DELETE FROM `products` WHERE id=".$_GET["id"]) === true) {
    header("Location: ../?code=0");
} else header("Location: ../?code=1");


