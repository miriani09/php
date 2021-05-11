<?php
    if (isset($_POST['insert'])) {
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $age = $_POST['age'];
        $date = $_POST['date'];
        $reg_date = $_POST['reg_date'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];

        $insert = "INSERT INTO users(name, lastname, age, date, reg_date, password, gender)
                    VALUES ('$name', '$lastname', '$age', '$date', '$reg_date', '$password', '$gender')";

        if (mysqli_query($connect, $insert)) {
            header("location: action.php");
        } else {
            echo "error: " . $insert . "<br>" . mysqli_error($connect);
        }
    }
        $select_query = "SELECT age, date, reg_date FROM users WHERE id < 4" ;
        $select_date = "SELECT * FROM users WHERE date = '1996-02-23'";
        $result = mysqli_query($connect,$select_date);

        while ($row = mysqli_fetch_assoc($result)){
            echo "<pre>";
                print_r($row);
            echo "</pre>";
        }

?>

<div>
    <form method="post">
        <input type="text" name="name" placeholder="name">
        <br><br>
        <input type="text" name="lastname" placeholder="lastname">
        <br><br>
        <input type="int" name="age" placeholder="age">
        <br><br>
        <input type="date" name="date" >
        <br><br>
        <input type="date" name="reg_date" >
        <br><br>
        <input type="password" name="password" placeholder="password">
        <br><br>
        <input type="text" name="gender" placeholder="gender">
        <br><br>
        <button name="insert">INSERT</button>
    </form>
</div>