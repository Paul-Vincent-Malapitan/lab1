<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <form action="/save" method="post">
            <label>ID</label>
            <input type="hidden" name= "ProductID" value="<?= isset($pro['ProductID']) ? $pro['ProductID'] : '' ?>"   >
            <br>
            <label>Product Name</label>
            <input type="text" name= "ProductName" placeholder="Name" value="<?= isset($pro['ProductName']) ? $pro['ProductName'] : '' ?>"   >
            <br>
            <label>Product Description</label>
            <input type="text" name= "ProductDescription" placeholder="Description" value="<?= isset($pro['ProductDescription']) ? $pro['ProductDescription'] : '' ?>" >
            <br>
            <label>Product Category</label>
            <input type="text" name= "ProductCategory" placeholder="Category" value="<?= isset($pro['ProductCategory']) ? $pro['ProductCategory'] : '' ?>" >
            <br>
            <label>Product Quantity</label>
            <input type="number" name= "ProductQuantity" placeholder="Quantity" value="<?= isset($pro['ProductQuantity']) ? $pro['ProductQuantity'] : '' ?>" >
            <br>
            <label>Product Price</label>
            <input type="number" name= "ProductPrice" placeholder="Price" value="<?= isset($pro['ProductPrice']) ? $pro['ProductPrice'] : '' ?>">
            <br>
            <input type="submit" value="save">
        </form>

    <h1>Add Product</h1>
    <table border ="1">
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Product Description</th>
            <th>Product Category</th>
            <th>Product Quantity</th>
            <th>Product Price</th>
            <th>Action</th>
        </tr>
        <?php foreach($product as $pr):?>
            <tr>
                <td><?= $pr ['ProductID'] ?></td>
                <td><?= $pr ['ProductName'] ?></td>
                <td><?= $pr ['ProductDescription'] ?></td>
                <td><?= $pr ['ProductCategory'] ?></td>
                <td><?= $pr ['ProductQuantity'] ?></td>
                <td><?= $pr ['ProductPrice'] ?></td>
                <td><a href="/delete/<?= $pr['ProductID'] ?>">Delete</a> || <a href="/edit/<?= $pr['id'] ?>">Update</a></td>
            </tr>
        
        <?php endforeach; ?>
    </table>
</body>
</html>