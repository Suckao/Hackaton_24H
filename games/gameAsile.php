<?php

?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <title>Escape Game</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="../assets/css/styleAsile.css" type="text/css">
</head>

<body class="room1_body">
<main>
    <h1 class="asile_h1">Room 1</h1>
    <section class="asile_conteneur">
        <div class="room1_transbox">
            <h2 class="room1_h2">Riddle 1</h2>
            <p>To get out of the room, solve this riddle:</p>
            <p>Quelle est la moitié de 4 + 4 ?</p>
        </div>
        <div class="room1_transbox2">
            <input class="room1_input" type="button" value="Your answer" onClick="answer()">
            <p id="room1_result"></p>
        </div>
    </section>
</main>
<script type="text/javascript" language="javascript">
    answer = () => {
        let response = prompt("Enter your answer :");
        alert("Confirm your answer: " + response);
        if ((response != null) && (response === '6')){
            document.getElementById("room1_result").innerHTML =
                "Well done ! You won 200 points !";
            function delay(){
                document.location.href="room2.php";
            }
            setTimeout(delay, 5000);
        } else {
            document.getElementById("room1_result").innerHTML = "Wrong answer !! Try again !";
        }
    }
</script>
</body>
</html>
