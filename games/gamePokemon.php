<?php
?>
<!DOCTYPE html>
<head>
  <title>Crazy Escape</title>
  <script type = "text/javascript" src = "../assets/js/pokemon.js"></script>
  <link rel = "stylesheet"  href = "../assets/css/stylePkemon.css" />
  <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>

<body id="games">
<audio autoplay>
    <source src="../sounds/battle.mp3" type="audio/mpeg">
</audio>
  <div id="game">
    <div class="opponent">
      <div class="stats">
        <div class="top">
          <div class="pokeballs">
            <div class="pokeball"></div>
            <div class="pokeball"></div>
            <div class="pokeball"></div>
            <div class="pokeball"></div>
            <div class="pokeball"></div>
          </div>
          <div id = "apHP" class="hp-count">100</div>
        </div>
        <span class="name">
          Charizard
        </span>
        <span class="level">
          86
        </span>
      </div>
      <img class="pokemon" src="https://img.pokemondb.net/sprites/black-white/anim/normal/charizard.gif" alt="Charizard">
    </div>
    <div class="player">
      <div class="stats">
        <div class="top">
          <div class="pokeballs">
            <div class="pokeball"></div>
            <div class="pokeball"></div>
            <div class="pokeball"></div>
            <div class="pokeball"></div>
            <div class="pokeball"></div>
          </div>
          <div id = "myHP" class="hp-count">100</div>
        </div>
        <span class="name">
          Mewtwo
        </span>
        <span class="level">
          86
        </span>
      </div>
      <img class="pokemon" src="https://img.pokemondb.net/sprites/black-white/anim/back-normal/mewtwo.gif" alt="Mewtwo">
    </div>
  </div>
  <div id="box">
    <div id = "message" class="message">
      What should Blastoise do?
    </div>
    <div class="actions">
      <button onclick = "mentalShock()">mental shock</button>
      <button onclick = "ironTail()">iron tail</button>
      <button onclick = "dynamopoing()">dynamopoing</button>
      <button onclick = "prescience()">prescience</button>
    </div>
    <div class = "continue">
      <button onclick = "compPokemon()">Continue</button>
    </div>
  </div>
  <div id="winner">
    <h1>CONGRATULATIONS YOU WIN!!!!<br> <a id="btn" type="button" href="../pages/planetJurassicPark.php">NEXT</a></h1>
   
  </div>
  <div id="game-over">
      <h1>GAME OVER! </h1>
  </div>
</body>
