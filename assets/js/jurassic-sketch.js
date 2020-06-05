
let dino;
let hero;
let dImg;
let tImg;
let bImg;
let hImg;
let scoreElem;
let trees = [];
var canvas = document.getElementById("jurassic-games");
var ctx = canvas.getContext("2d");

function preload() {
    const options = {
        probabilityThreshold: 0.95
    };
    dImg = loadImage('/assets/images/jurassic-trex.png');
    tImg = loadImage('/assets/images/jurassic-tree.png');
    bImg = loadImage('/assets/images/jurassicgamebackground.png');
    hImg = loadImage('/assets/images/jurassic-hero.png');
}

function mousePressed() {
    trees.push(new JurassicTree());
}

function setup() {
    createCanvas(windowWidth, windowHeight);
    background(bImg);
    dino = new JurassicTrex();
    hero = new JurassicHero();
    scoreElem = createDiv('Score = 0');
    scoreElem.position(20, 20);
    scoreElem.id = 'score';
    scoreElem.style('color', 'white');

}

function windowResized() {
    resizeCanvas(windowWidth, windowHeight);
}

function gotCommand(error, results) {
    if (error) {
        console.error(error);
    }
    console.log(results[0].label, results[0].confidence);
    if (results[0].label == 'up') {
        hero.jump();
    }
}

function keyPressed() {
    if (key == ' ') {
        hero.jump();
        const prevScore = parseInt(scoreElem.html().substring(8));
        const totalScore = (prevScore + 1);
        scoreElem.html('Score = ' + totalScore);
        if (totalScore > 20) {
            alert("Congrats you won ! Press ok to go to the next planet !");
            document.location.replace('/pages/planetMirror.php');
        }
    }
}

function draw() {

    if (random(1) < 0.005) {
        trees.push(new JurassicTree());
    }

    background(bImg);
    for (let t of trees) {
        t.move();
        t.show();
        if (hero.hits(t)) {
            const scoreVal = parseInt(scoreElem.html().substring(8));
            alert('GAME OVER! Your score was : ' + scoreVal);
            document.location.reload();
            noLoop();
        }
    }

    ctx.clearRect(0,0, canvas.width, canvas.height);
    hero.show();
    hero.move();
    dino.show();
    dino.move();
}