<?php
    if (isset($_POST['insert'])){
        $title = $_POST['title'];
        $data = $_POST['data'];
        $type = $_POST['type'];
        $photo = $_POST['photo'];
        $text = $_POST['text'];
        $author = $_POST['author'];
        $description = $_POST['description'];
        $meta_k = $_POST['meta_k'];
        $meta_d = $_POST['meta_d'];

        $insert = "INSERT INTO data(title,data,type,photo,text,author,description,meta_k,meta_D)
                VALUES ('$title', '$data', '$type', '$photo', '$text', '$author', $description, $meta_k, $meta_d)";

        if (mysqli_query($connect, $insert)){
            header("location: action.php");
        }else{
            echo "error: " .$insert. "<br>" . mysqli_error($connect);
        }
    }
?>

<div>
    <form method="post">
        <input type="text" name="title" placeholder="title">
        <br><br>
        <input type="date" name="date">
        <br><br>
        <input type="text" name="type" placeholder="type">
        <br><br>
        <input type="text" name="photo" placeholder="photo">
        <br><br>
        <textarea name="text" id="" cols="30" rows="10" placeholder="enter text..."></textarea>
        <br><br>
        <input type="text" name="author" placeholder="author">
        <br><br>
        <input type="text" name="description" placeholder="description">
        <br><br>
        <input type="text" name="meta_k" placeholder="meta_k">
        <br><br>
        <input type="text" name="meta_d" placeholder="meta_d">
        <br><br>
        <button name="insert">INSERT</button>
    </form>
</div>