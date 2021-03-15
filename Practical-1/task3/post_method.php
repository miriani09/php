<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            border: solid 1px black;
            border-radius: 10px;
            margin:auto;
            width: 800px;
            min-height: 200px;
        }
        h1,label{
            margin-left: 20px;
            font-size: 20px;
        }
        input{
            margin-left: 20px;
            margin-top: 12px;
        }
        textarea{
            margin-left: 20px;
            margin-top: 7px;
        }
        button{
            margin-left: 300px;
            margin-top: -10px;
            width: 150px;
            height: 50px;
            border-radius: 10px;
        }
        button:hover{
            background-color: grey;
            color: white;
        }
    </style>
</head>
<body>
    <form method="post">
        <h1>Tests</h1>
        <label for="">Question 1:</label><br>
        <input type="radio" name="q1-answer1" value="q1-ans1">Answer 1 <br>
        <input type="radio" name="q1-answer1" >Answer 2 <br>
        <input type="radio" name="q1-answer1" >Answer 3 <br>
        <input type="radio" name="q1-answer1" >Answer 4 <br>

        <hr>

        <label for="">Question 2:</label><br>
        <input type="radio" name="q2-answer1" >Answer 1 <br>
        <input type="radio" name="q2-answer1" >Answer 2 <br>
        <input type="radio" name="q2-answer1" value="q2-ans3">Answer 3 <br>
        <input type="radio" name="q2-answer1" >Answer 4 <br>

        <hr>

        <label for="">Question 3:</label><br>
        <input type="radio" name="q3-answer1" >Answer 1 <br>
        <input type="radio" name="q3-answer1" >Answer 2 <br>
        <input type="radio" name="q3-answer1" >Answer 3 <br>
        <input type="radio" name="q3-answer1" value="q3-ans4">Answer 4 <br>

        <hr>

        <label for="">Question 4:</label><br>
        <textarea name="q4-answer1" id="" cols="50" rows="7"></textarea>

        <hr>

        <label for="">Question 5:</label><br>
        <textarea name="q5-answer1" id="" cols="50" rows="7"></textarea>

        <hr>

        <button name="send_post">Submit</button>
    </form>

    <?php
        if(isset($_POST['send_post']) && !empty($_POST['q1-answer1']) && !empty($_POST['q2-answer1'])&& !empty($_POST['q3-answer1'])
         && !empty($_POST['q4-answer1'])&& !empty($_POST['q5-answer1'])){
    ?>
    <?php
            $count = 0;
            $answer1 = $_POST['q1-answer1'];
            $answer2 = $_POST['q2-answer1'];
            $answer3 = $_POST['q3-answer1'];
            $answer4 = $_POST['q4-answer1'];
            $answer5 = $_POST['q5-answer1'];
            if ($answer1 == "q1-ans1") {
                $count += 1;
            }
            if($answer2 == "q2-ans3"){
                $count += 1;
            }
            if($answer3 == "q3-ans4"){
                $count += 1;
            }
            if($answer4 == "answer1"){
                $count += 1;
            }
            if($answer5 == "answer2"){
                $count += 1;
            }
            echo $count;
    ?>
    <?php
        }
    ?>
</body>
</html>