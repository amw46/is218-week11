<?php include '../view/header.php'; ?>
<main>
    <h1>Add Product</h1>
    <form action="index.php" method="post" id="add_product_form">
        <input type="hidden" name="action" value="add_product">

        <label>Category:</label>
        <?php $page = filter_input(INPUT_GET, 'page');
              $cat_id = get_category_id($page);
        ?>
        <input type="hidden" name="category_id" value="<?php echo $cat_id; ?>">
        <select name="category_id" disabled>
            <option value="<?php echo $cat_id; ?>">
                <?php echo $page; ?>
            </option>
        </select>
        <br>

        <label>Code:</label>
        <input type="text" name="code" />
        <br>

        <label>Name:</label>
        <input type="text" name="name" />
        <br>

        <label>List Price:</label>
        <input type="text" name="price" />
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Add Product" />
        <br>
    </form>

    <p class="last_paragraph">
        <a href="index.php?action=list_products">View Product List</a>
    </p>

</main>
<?php include '../view/footer.php'; ?>