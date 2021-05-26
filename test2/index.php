<?php
require_once "./sql-connect/conn.php";
include "./sql-connect/queries.php";
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
    <title>Document</title>
</head>
<body>
<h1><a href="index.php" style="text-decoration: none;color: black">Lexicon ENG/GEO</a></h1>
<form action="" method="get" class="form1">
    <input class="form-control" name="eng" type="text" placeholder="Eng" aria-label="default input example">
    <br>
    <input class="form-control" name="geo" type="text" placeholder="Geo" aria-label="default input example">
    <br>
    <button name="submit" class="btn btn-primary">Submit</button>
    <button name="test" class="btn btn-success">Test</button>
</form>

<table class="table w-100 p-3">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">English</th>
        <th scope="col">Georgian</th>
        <th></th>
    </tr>
    </thead>
    <?php
    $select_query = "SELECT * FROM words ORDER BY RAND() LIMIT 3";
    $result = mysqli_query($conn, $select_query);

    foreach ($result as $i => $items){
    ?>
    <tbody>
    <tr>
        <th scope="row"><?php echo $i+1?></th>
        <td><?php echo $items['eng']?></td>
        <td><?php echo $items['geo']?></td>
        <td>
            <a href="./sql-connect/update.php?edit=<?=$items['id']?>" type="button" class="btn btn-primary">Edit</a>
            <a href="?delete=<?=$items['id']?>" type="button" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    <?php
    }
    ?>
    </tbody>
</table>

<?php
    if (isset($_GET['test'])){
        $select_answer = "SELECT * FROM words ORDER BY RAND() LIMIT 1";
        $result_ans = mysqli_query($conn, $select_answer);

        foreach ($result_ans as $i => $answer){
        ?>
        <br>
        <div class="form-check" style="margin: 20px !important;">
            <form action="" method="get">
            <h5><?php echo $i+1 ?>) Choose Correct Answer:</h5>
            <h5><?php echo $answer['eng']?></h5>
            <br>
            <input class="form-check-input" type="radio" name="test1" id="q_1_yes" value="yes">
            <label class="form-check-label" for="flexRadioDefault1">
                <?php echo $answer['geo']?>
            </label>
            <br>
            <input class="form-check-input" type="radio" name="test1" id="q_1_no" value="no">
            <label class="form-check-label" for="flexRadioDefault1">
                <?php echo $items['geo']?>
            </label>
            <br><br>
            </form>
        </div>
    <?php
        }
    }
?>

<?php
if (isset($_GET['test'])){
    $select_answer = "SELECT * FROM words ORDER BY RAND() LIMIT 1";
    $result_ans = mysqli_query($conn, $select_answer);

    foreach ($result_ans as $i => $answer){
        ?>
        <br>
        <div class="form-check" style="margin: 20px !important;">
            <form action="" method="get">
            <h5><?php echo $i+1 ?>) Choose Correct Answer:</h5>
            <h5><?php echo $answer['eng']?></h5>
            <br>
            <input class="form-check-input" type="radio" name="test2" id="q_2_yes" value="yes"">
            <label class="form-check-label" for="flexRadioDefault1">
                <?php echo $answer['geo']?>
            </label>
            <br>
            <input class="form-check-input" type="radio" name="test2" id="q_2_no" value="no">
            <label class="form-check-label" for="flexRadioDefault1">
                <?php echo $items['geo']?>
            </label>
            <br><br>
            </form>
        </div>
        <?php
    }
}
?>
<?php
    if (isset($_GET['test'])){
        echo "<form method='get'>";
            echo "<button name='submit_test' class='btn btn-primary'>Submit Test</button>";
        echo "</form>";
    }
?>
</body>
</html>
