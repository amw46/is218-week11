<?php include '../view/header.php'; ?>
<main>

    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>ID Number</th>
        </tr>        
	<?php foreach ($categories as $category) : ?>
	<tr>
	   <td>
           <?php echo $category['categoryName']; ?>
	   </td>
	   <td>
           <?php echo $category['categoryID']; ?>
	   </td>
	</tr> 
	<?php endforeach; ?>

    </table>

    <p><a href="?action=show_add_category">Add A Category</a></p>

    <p><a href="index.php?action=list_products">List Products</a></p>

</main>
<?php include '../view/footer.php'; ?>
