<?php
    $pdo = new PDO('mysql:host=localhost;dbname=products_crud','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $pdo->prepare('SELECT * FROM products');
    $statement->execute();
    $products = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="app.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
    <h1>Products CRUD</h1>

    <p>
        <a href="create.php" type="button" class="btn btn-sm btn-success">Add Product</a>
    </p>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <td>Image</td>
            <td>Title</td>
            <td>Price</td>
            <td>Create Date</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody>
            <?php
                foreach ($products as $i => $product){ ?>
                    <tr>
                        <th scope="row"><?php echo $i + 1 ?></th>
                        <td></td>
                        <td> <?php echo $product['title'] ?> </td>

                        <td> <?php echo $product['price'] ?> </td>

                        <td> <?php echo $product['create_date'] ?> </td>
                        <td>
                            <button type="button" class="btn btn-sm btn-outline-primary">Edit</button>
                            <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>
                        </td>
                    </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>