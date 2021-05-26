<?php
    require_once "conn.php";
    include "./action/delete.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<?php
include "./blocks/header.php";
?>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Quantity</th>
        <th scope="col">Price</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php
    $select_query = "SELECT * FROM items";
    $result = mysqli_query($conn, $select_query);

    foreach ($result as $i => $items){ ?>
        <tr>
            <th scope="row"><?php echo $i + 1 ?></th>

            <td> <?php echo $items['title'] ?> </td>

            <td> <?php echo $items['quantity'] ?> </td>

            <td> <?php echo $items['price'] ?> </td>
            <td>
                <a href="update_items.php?edit=<?=$items['id']?>" class="btn btn-sm btn-outline-primary">Edit</a>
                <a href="?delete=<?=$items['id']?>" id="del" class="btn btn-sm btn-outline-danger" onclick="del()">Delete</a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<script>
    function del() {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("del").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET","index.php?delete=",true);
            xmlhttp.send();
        }
    }
</script>

</body>
</html>