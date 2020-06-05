var ialt = $('img').length;;
var fundet = 0;

$("#ialt").text(ialt);

$('img').on('click', function() {
    $(this).toggleClass('animated swing bounced');
    update_score();
});

function update_score() {
    var numItems = $('.bounced').length;
    console.log(numItems);
    $("#fundet").text(numItems);
    if (numItems == ialt) {
        show_win();
    }
}

$(document).ready(function() {
    var audio = $("#clickSound")[0];

    $("img").mousedown(function() {
        if (!$(this).hasClass("bounced")) {
            audio.play();
        }
    });
});

function show_win() {
    $('#winner').addClass('animated fadeInDown');
    $('#winner').toggle();
}

$('#winner').on("click", function() {
    $("img").toggleClass('animated swing bounced');
    $('#winner').toggle();
    $("#fundet").text('0');
});
