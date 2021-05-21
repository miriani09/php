<div>
    <?php
        $select_query = "SELECT * FROM categories";
        $result = mysqli_query($conn, $select_query);
//        while($row = mysqli_fetch_assoc($result)){
//            echo "<pre>";
//            print_r($row);
//            echo "</pre>";
//        }

    while($row = mysqli_fetch_assoc($result)){
        ?>
        <div class="category">
            <div><?=$row['title']?></div>
            <div><?=$row['author']?></div>
            <div><?=$row['date']?></div>
        </div>
    <?php
        }
    ?>
</div>