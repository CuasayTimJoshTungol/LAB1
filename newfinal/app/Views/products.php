<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

    <?php if(session()->getFlashdata('msg')):?> 

            <?= session()->getFlashdata('msg') ?>
      
    <?php endif;?>
    <table border="1">
        <tr>
            <th>Product Name</th>
            <th>Product Description</th>
            <th>Product Category</th>
            <th>Product Quantity</th>
            <th>Product Price</th>
            <th>Action</th>
        </tr>
        <?php foreach ($pr as $p): ?>
            <tr>
                <td><a href="/edit/<?=$p['id']?>"><?= $p['product_name'] ?></a></td>
                <td><?= $p['product_description'] ?></td>
                <td><?= $p['product_category'] ?></td>
                <td><?= $p['product_quantity'] ?></td>
                <td><?= $p['product_price'] ?></td>
                <td>
                    <a href="/edit/<?=$p['id']?>">Edit</a> 
                    <a href="/delete/<?=$p['id']?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <button onclick="window.location.href='/insert'">Add New</button>
    <ul>
    <?php foreach ($pr as $p): ?>
        <li>
            <strong>Product Name:</strong> <?=$p ['product_name'] ?>
            <br>
            <strong>Product Description:</strong> <?=$p ['product_description'] ?>
            <br>
            <strong>Product Category:</strong> <?=$p ['product_category'] ?>
            <br>
            <strong>Product Quantity:</strong> <?=$p ['product_quantity'] ?>
            <br>
            <strong>Product Price:</strong> <?=$p ['product_price'] ?>
        </li>
        <br>
        <?php endforeach; ?>
    </ul>
</body>
</html>