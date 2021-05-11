<?php
    if (isset($_POST['insert'])){
        $title = $_POST['title'];
        $meta_k = $_POST['metak'];
        $meta_d = $_POST['metad'];
        $text = $_POST['text'];

        $insert = "INSERT INTO menu(title, meta_k, meta_d, text)
        VALUES ('$title', '$meta_k', '$meta_d', '$text')";

        if (mysqli_query($connect, $insert)){
            header("location:action.php");
        }else{
            echo "error: " . $insert . "<br>" . mysqli_error($connect);
        }
    }

    $select_query = "SELECT * FROM menu WHERE menu.title = 'miro'";
    $result = mysqli_query($connect, $select_query);

    while($row = mysqli_fetch_assoc($result)){
        echo "<pre>";
            print_r($row);
        echo "</pre>";
    }
?>

<div>
    <form method="post">
        <input type="text" name="title" placeholder="Title">
        <br><br>
        <input type="text" name="metak" placeholder="Meta_k">
        <br><br>
        <input type="text" name="metad" placeholder="Meta_d">
        <br><br>
        <textarea name="text" id="" cols="30" rows="10" placeholder="Enter text..."></textarea>
        <br><br>
        <button name="insert">INSERT</button>
    </form>
</div>