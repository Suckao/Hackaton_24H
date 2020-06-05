
class JurassicTree {

    constructor() {
        this.r = 150;
        this.x = width;
        this.y = height - this.r;
    }

    move() {
        this.x -= 30;
    }

    remove() {
        this.x = width;
        this.y = height - this.r;
    }

    show() {
        image(tImg, this.x, this.y, this.r, this.r);

        // fill(255, 50);
        // ellipseMode(CORNER);
        // ellipse(this.x, this.y, this.r, this.r);
    }

}