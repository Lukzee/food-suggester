<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teniola (Lukzee) - Food Suggester</title>
    <style>
        body {
            margin: 0;
            font-family: "Montserrat", sans-serif;
            background: #131418;
            text-align: center;
        }

        .container {
            width: 50%;
            height: 50vh;
            margin: auto;
            margin-top: 100px;
            padding: 20px;
            color: #fff;
            overflow: hidden;
            background: rgb(25, 25, 25);
        }

        a {
            color: #fff;
        }

        .replybox {
            margin-top: 50px;
            background: rgba(255, 255, 255, 1);
            height: 200px;
            padding: 10px;
            color: blue;
        }

        span {
            font-style: bold;
            font-size: 20px;
        }
    </style>
</head>
<body>
<?php
    $foods = array('Rice & stew', 'Jollof rice', 'Beans with bread', 'Yam and eggs', 'Yam porridge', 'Rice and Beans & stew', 'Jollof Rice and Beans', 'Rice with Yam & stew', 'Jollof Rice with Yam', 'Beans and Yam porridge', 'Rice, Beans and Yam & stew', 'Jollof Rice, Beans and Yam');
    shuffle($foods);
    ?>
    <div class="container">
        <h2>Are you thinking 🤔 of what to eat buddy?</h2>
        <p>👉<a href="?check">Click here</a>👈 for suggestion...</p>

        <div class="replybox">
            <strong>Relpy</strong> <br><br>

            <?php
            if (isset($_GET['check'])) {
                echo "<span><i>".$foods[0]."</i> will be better buddy 🤤</span>";
            }
            ?>
        </div>
        Build by - Teniola (Lukzee) aka Tenn whiterose
    </div>
    
    
</body>
</html>