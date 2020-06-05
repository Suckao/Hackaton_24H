<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/amityville.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Creepster&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

    <!-- importing font from typekit -->
    <script src="https://use.typekit.net/qlo5khd.js"></script>
    <script>try {
            Typekit.load({async: true});
        } catch (e) {
        }</script>
</head>
<body>
<div class="bg_overlay"></div>
<!-- The game visuals -->
<div id="main" class="scaled-bg">
    <div id="winner">
        <div>Congrats, you won the game! <br> <a href="/pages/planetPokemon.php">Go to your next adventure</a></div>
    </div>
    <div class="game_av_overlay">
        <div id="scoreboard"><span id="fundet">0</span> of <span id="ialt">0</span> found</div>
        <div id="header">Find the following objects : Knife - Snake - Cat - Eyes - Harpoon <br> Gun - Justin Bieber -
            Bloody Hand - Coffin - Trump Voodoo Doll
        </div>
        <img id="item-coffin" class="c"
             src="https://i.postimg.cc/XNH4rZHg/5a8c6777b15d5c051b368fcd.png"/>
        <img id="item-2-bieber"
             src="http://orig10.deviantart.net/1801/f/2013/261/a/7/justin_bieber_lolly_by_kidrauhlbieber6-d6mruvj.png"/>
        <img id="item-3-knife"
             src="https://i.postimg.cc/pdrpDfvV/580b585b2edbce24c47b2448.png"/>
        <img id="item-4-gun"
             src="https://i.postimg.cc/htSs0Cpq/5ba8d51b554c7f08176ebfa8.png"/>
        <img id="item-5-harpoon"
             src="https://i.postimg.cc/sxLcDy5P/5ba8d52d554c7f08176ebfab.png"/>
        <img id="item-6-eyes"
             src="https://i.postimg.cc/gcBmxFwL/58979eb0cba9841eabab6138.png"/>
        <img id="item-7-hand"
             src="https://i.postimg.cc/R0XVG30X/580b585b2edbce24c47b2947.png"/>
        <img id="item-8-cat"
             src="https://i.postimg.cc/GtGmrXcm/5a5a8b9114d8c4188e0b08e8.png"/>
        <img id="item-9-trump"
             src="https://i.postimg.cc/g0stJhzy/58da5b135f58be1227aec910.png"/>
        <img id="item-10-snake"
             src="https://i.postimg.cc/q7tf9QXh/580b57fbd9996e24bc43bce4.png"/>
    </div>
</div>

<!-- The game sound-->
<audio id="clickSound">
    <source src="http://opengameart.org/sites/default/files/bubbles_0.mp3"></source>
    <source src="http://opengameart.org/sites/default/files/bubbles.ogg"></source>
</audio>
<script
        src="https://code.jquery.com/jquery-3.5.0.min.js"
        integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
        crossorigin="anonymous"></script>

<script type="text/javascript" src="../assets/js/amityville.js"></script>

</body>
</html>
