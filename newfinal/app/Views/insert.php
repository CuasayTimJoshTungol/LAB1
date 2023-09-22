<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert New Product</title>
</head>
<body>

    <h1>Product Listing </h1>

    <form action="/insert" method="post">
        <!-- Form fields for product details (Name, Description, Category, Price, Quantity) -->
        <label>Product Name: </label>
        <input type="text" name="product_name"><br><br>

        <label>Product Description: </label>
         <input type="text" name="product_description"><br><br>

        <label>Product Category: </label>
        <select name="product_category" value="<?= isset($p['product_category']) ? $p["product_category"] : '' ?>">
        
        <option value="Electronics" <?= isset($p['product_category']) && $prod['product_category'] == 'Electronics' ? 'selected' : '' ?>>Electronics</option>
        <option value="Media" <?= isset($p['product_category']) && $prod['product_category'] == 'Media' ? 'selected' : '' ?>>Media</option>
        <option value="Gadgets" <?= isset($finaltim['product_category']) && $prod['product_category'] == 'Gadgets' ? 'selected' : '' ?>>Gadgets</option>
        <option value="PC" <?= isset($finaltim['product_category']) && $prod['product_category'] == 'PC' ? 'selected' : '' ?>>PC</option>
        <option value="Foods" <?= isset($finaltim['product_category']) && $prod['product_category'] == 'Foods' ? 'selected' : '' ?>>Foods</option>  
    
        </select><br><br>

        <label>Product Quantity: </label>
        <input type="number" name="product_quantity" value="<?= isset($finaltim['product_quantity']) ? $finaltim['product_quantity'] : '' ?>"><br><br>

        <label>Product Price: </label>
        <input type="text" name="product_price"><br><br>

        <button type="button" onclick="window.history.back();" style="background-color: #95a5a6;">Add Products</button>
        <button type="button" onclick="window.history.back();" style="background-color: #95a5a6;">Cancel</button>
    </form>

</body>
</html>