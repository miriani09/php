<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            width: 208px;
            margin: auto;
            margin-top: 200px;
        }
        input{
            width: 200px;
            font-size: 25px;
            margin: 10px;
        }
        button{
            margin: 10px;
            width: 80px;
            height: 30px;
            background-color: grey;
            color: white;
        }
        button:hover{
            background-color: darkgray;
        }
    </style>
</head>
<body>
    <form action="task1-get.php" method="get">
        <input type="text" placeholder="სახელი" name="name">
        <br>
        <input type="text" placeholder="გვარი" name="surname">
        <br>
        <input type="text" placeholder="თანამდებობა" name="position">
        <br>
        <input type="number" placeholder="ხელფასი" name="salary">
        <br>
        <button name="send">Submit</button>
    </form>
</body>
</html>