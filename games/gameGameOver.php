<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <audio autoplay loop preload="../assets/musique/final.mp3">
  <source src="../assets/musique/final.mp3" type="audio/mp3" /></audio>
  <link rel="stylesheet" href="../assets/css/GameGameover.css">
</head>
<body>
<div id="game_over" class="state-ui-container">
  <div class="console">
   <div class="ui-text ui-text--heading">GAME OVER!</div>
   <div id="final_score" class="ui-text"></div> 
   <div class="ui-text"> YOU DIE....AND WAKE UP.. PRESS [R] </div>
  </div>
</div>
<div id="title" class="state-ui-container">
  <div class="console">
    <div class="ui-text ui-text--heading">PREPARE TO FIGHT.. THEY ARE COMING</div>
    <div class="ui-text">INSTRUCTIONS:</div>
    <div class="ui-text">PRESS [ARROW KEYS] TO MOVE!</div>
    <div class="ui-text">PRESS [SPACE] TO SHOOT!</div>
    <div class="ui-text">PRESS [ENTER] TO PLAY!</div>
  </div>
</div>
<div id="game" class="state-ui-container">
  <div class="banner">
    <div id="score" class="ui-text">SCORE: 0</div>
    <div id="lives" class="ui-text">LIVES: 3</div>
  </div>
</div>
<script>
<?php include "../assets/js/GameOver.js" ?>
</script>
</body>
</html>