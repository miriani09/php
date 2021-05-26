<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Week 12</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <input type="text" id="user">
    <br><br>
    <button onclick="send()">SEND</button>
</div>
<script>
    function send(){
        var user = $("#user").val();
        console.log(user);
        var products = ["Apply", "lemon", "Banana"];
        $.ajax({
            type:"post",
            url: "action.php",
            data:{
                user:user,
                pass:"1234",
                products: products
            },
            success: function(data){
                console.log(data);
                var d = JSON.parse(data);
                console.log(d);
            }
        });
    }
</script>
</body>
</html><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Week 12</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <input type="text" id="user">
    <br><br>
    <button onclick="send()">SEND</button>
</div>
<script>
    function send(){
        var user = $("#user").val();
        console.log(user);
        var products = ["Apply", "lemon", "Banana"];
        $.ajax({
            type:"post",
            url: "action.php",
            data:{
                user:user,
                pass:"1234",
                products: products
            },
            success: function(data){
                console.log(data);
                var d = JSON.parse(data);
                console.log(d);
            }
        });
    }
</script>
</body>
</html>