<div>
    <?php
        $select_query = "SELECT * FROM categories";
        $result = mysqli_query($conn, $select_query);
        while($row = mysqli_fetch_assoc($result)){
            echo "<pre>";
            print_r($row);
            echo "</pre>";
        }

    ?>
</div>