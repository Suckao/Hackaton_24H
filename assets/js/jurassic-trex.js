class JurassicTrex {

    constructor() {
        this.r = 300;
        this.x = 0;
        this.y = height - this.r;
        this.vy = 0;
        this.gravity = 3;
    }

    move() {
        this.y += this.vy;
        this.vy += this.gravity;
        this.y = constrain(this.y, 0, height - this.r);
    }

    show() {
        image(dImg, this.x, this.y, this.r, this.r);

        // fill(255, 50);
        // ellipseMode(CORNER);
        // ellipse(this.x, this.y, this.r, this.r);
    }
}