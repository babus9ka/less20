<?php
require_once 'includes/db.php';
$products = mysqli_query($db, "SELECT * FROM `products`");


?>

<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>price</th>
        <th>category_id</th>
        <th>description</th>
    </tr>
    <?php
    while ($product = mysqli_fetch_assoc($products)){


        ?>
        <tr>
            <td><?= $product["id"] ?></td>
            <td><?= $product['name'] ?></td>
            <td><?= $product['price'] ?></td>
            <td><?= $product['category_id'] ?></td>
            <td><?= $product['description'] ?></td>
        </tr>


        <?php
    }
    ?>


</table>

<style>
    th, td {
        padding: 10px;

    }
    th{
        background: #2e2e2e;
        color: #fff;
    }
    td{
        background: #e3e3e3;
    }
</style>


<form
    action="includes/add_product.php"
    method="post"
    enctype="multipart/form-data"
        >
    <p>Title</p>
    <input type="text" name="title">
    <p>Descrition</p>
    <textarea name="description"></textarea>
    <p>Price</p>
    <input type="text" name="price">
    <select name="category_id">
        <option>1</option>
        <option>2</option>
        <option>3</option>
    </select>
    <br>
    <br>
    <button type="submit">Add new product</button>
</form>