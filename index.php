<?php
include 'layouts/head.php';
?>
<audio autoplay>
    <source src="assets/sound/effect.mp3" type="audio/mpeg">
</audio>
<div class="bg-index">
    <div class="container">
        <div class="row justify-content-space-between">
           <div>
               <p>
                   <a class="btn btn-dark games mt-2 " data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                       Games
                   </a>
               </p>
               <div class="collapse" id="collapseExample">
                   <ul class="list-group ">
                       <li class="list-group-item bg-dark"><a href="../pages/planetAmityVille.php">AmityVille</a></li>
                       <li class="list-group-item bg-dark"><a href="../pages/planetAsile.php">Asile</a></li>
                       <li class="list-group-item bg-dark"><a href="../pages/planetGameOver.php">GameOver</a></li>
                       <li class="list-group-item bg-dark"><a href="../pages/planetJurassicPark.php">JurassicPark</a></li>
                       <li class="list-group-item bg-dark"><a href="../pages/planetMirror.php">Mirror</a></li>
                       <li class="list-group-item bg-dark"><a href="../pages/planetMyLittlePoney.php">MyLittlePoney</a></li>
                       <li class="list-group-item bg-dark"><a href="../pages/planetPokemon.php">Pokemon</a></li>
                   </ul>
               </div>
           </div>

            <div class="jumbotron bg-dark col-8 ml-2 cont-index">
                <h1 class="display-4 font-weight-bold mb-5">Hey, Dude!</h1>
                <p class="lead font-weight-bold">You are stuck in a psychiatric hospital since 3 years now, and it’s time to escape and live the most incredible adventure of your life !</p>
                <hr class="my-4">
                <p class="font-weight-bold">What are you waiting for ? Just click GO and escape !</p>
                <p class="lead">
                    <a class="btn btn-danger btn-lg mt-4 go " href="../pages/planetAsile.php" role="button">GO !</a>
                </p>
            </div>
        </div>
    </div>
</div>

<?php
include 'layouts/footer.php';
?>
