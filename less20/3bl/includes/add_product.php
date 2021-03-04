<?php
require_once 'db.php';

$title = $_POST["title"];
$price = $_POST["price"];
$description = $_POST["description"];
$category_id = $_POST["category_id"];
$query = mysqli_query($db, "INSERT INTO `products` (`id`, `name`, `description`, `category_id`,
                        `price`) VALUES (NULL, '$title', '$description',
                                                     '$category_id', '$price')");
echo ($query) ? "Product is store" : "Error store product";

?>
<br>
<br>
<a href="../index.php">Вернуться на Главную</a>
