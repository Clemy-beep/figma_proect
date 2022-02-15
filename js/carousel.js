$("#prev-button").click(function(e) {
    var carousel = $('#carousel-items');
    carousel.scrollLeft(carousel.scrollLeft() - 500);
});

$("#next-button").click(function(e) {
    var carousel = $('#carousel-items');
    carousel.scrollLeft(carousel.scrollLeft() + 500);
});

$("#discussion-display").click(function(e) {
    e.preventDefault();
    $("#modal-overlay").css("visibility", "visible");
});

$("#close-btn").click(function(e) {
    $("#modal-overlay").css("visibility", "hidden");
});