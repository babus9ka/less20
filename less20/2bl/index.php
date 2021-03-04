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