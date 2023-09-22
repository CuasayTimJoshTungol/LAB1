<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
<form action="<?= base_url('/update') ?>" method="post">
        <input type="hidden" name="id" value="<?= isset($p['id']) ? $p['id'] : '' ?>">
        <label> Product Name: </label>
        <input type="text" name="product_name" value="<?= isset($p['product_name']) ? $p['product_name'] : '' ?>">
        <br><br>
        <label> Description: </label>
        <input type="text" name="product_description" value="<?= isset($p['product_description']) ? $p['product_description'] : '' ?>">
        <br><br>
        <label> Category: </label>
        <select name="product_category" value="<?= isset($finaltim['product_category']) ? $finaltim["product_category"] : '' ?>">
        
        <option value="Electronics" <?= isset($finaltim['product_category']) && $prod['product_category'] == 'Utencils' ? 'selected' : '' ?>>Utencils</option>
        <option value="Media" <?= isset($finaltim['product_category']) && $prod['product_category'] == 'Clothes' ? 'selected' : '' ?>>Clothes</option>
        <option value="Gadgets" <?= isset($finaltim['product_category']) && $prod['product_category'] == 'Gadgets' ? 'selected' : '' ?>>Gadgets</option>
        <option value="PC" <?= isset($finaltim['product_category']) && $prod['product_category'] == 'Appliances' ? 'selected' : '' ?>>Appliances</option>
        <option value="Foods" <?= isset($finaltim['product_category']) && $prod['product_category'] == 'Foods' ? 'selected' : '' ?>>Foods</option>
    
    
        </select><br><br>
        <label> Quantity: </label>
        <input type="number" name="product_quantity" value="<?= isset($p['product_quantity']) ? $p['product_quantity'] : '' ?>">
        <br><br>
        <label> Price: </label>
        <input type="text" name="product_price" value="<?= isset($p['product_price']) ? $p['product_price'] : '' ?>">
        <br><br>
        <input type="submit" name="update" value="Update">
        <br><br>

        <!-- Delete button -->
        <button type="button" onclick="confirmDelete(<?= isset($p['id']) ? $p['id'] : '' ?>)">Delete</button>
    </form>

    <script>
        function confirmDelete(id) {
            if (id !== '') {
                if (confirm('Are you sure you want to delete this product?')) {
                    window.location.href = '<?= base_url('/delete/') ?>' + id;
                }
            } else {
                alert('Product ID is not available.');
            }
        }
    </script>
</body>
</html>