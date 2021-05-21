<?php
    $pdo = new PDO('mysql:host=localhost;dbname=products_crud','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<pre>";
        var_dump($_POST);
    echo "</pre>";

    $errors = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $title = $_POST['title'];
        $description = $_POST['description'];
        $price = $_POST['price'];

        if (!$title || !$price){

        }

        $statement = $pdo->prepare("INSERT INTO products (title, image, description, price, create_date)
                VALUES (:title, :image, :description, :price, :date)");
        $statement->bindValue(':title', $title);
        $statement->bindValue(':image', '');
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':date', date('Y-m-d H:i:s'));

        $statement->execute();
    }
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

    <h1>Create new product</h1>

    <form method="post">
        <div class="mb-3">
            <label  >Product Image</label><br>
            <input type="file" name="image">
        </div>
        <div class="mb-3">
            <label  >Product Title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3">
            <label  >Product Description</label>
            <textarea class="form-control" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label  >Product Price</label>
            <input type="number" class="form-control" name="price">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</body>
</html>