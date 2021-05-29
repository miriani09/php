<?php
    require_once "conn.php";
    include "queries.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1><a href="../index.php" style="text-decoration: none;color: black;">Write Your Comments To Food</a></h1>
    <form method="post" class="form1">
        <div  style="font-weight: bolder; font-size: 20px !important; border: none"><?php echo htmlspecialchars($title);?></div>
        <br>
        <input class="form-control" name="name" type="text" placeholder="Enter User Name" aria-label="default input example">
        <br>
        <textarea class="form-control" name="comments" type="text" rows="10" placeholder="Write Comments Here..." aria-label="default input example"></textarea>
        <br>
        <button name="submit" class="btn btn-primary">Submit</button>
    </form>
    <table class="table w-100 p-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Comments</th>
            <th scope="col">Date</th>
        </tr>
        </thead>
        <?php
            if (isset($_GET['food'])) {
                $user_comments = $_GET['food'];
                $select_query = "SELECT * FROM comment WHERE food_id = '$user_comments'";
                $result = mysqli_query($conn, $select_query);
            foreach ($result as $i => $items){
        ?>
        <tbody>
        <tr>
            <th scope="row"><?php echo $i+1?></th>
            <td><?php echo $items['name']?></td>
            <td><?php echo $items['text']?></td>
            <td><?php echo $items['date']?></td>
        </tr>
        <?php
            }
        }
        ?>
        </tbody>
    </table>

</body>
</html>