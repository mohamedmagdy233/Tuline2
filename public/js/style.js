$(document).ready(function() {



    $(".session-msg").addClass("show-msg");
    setTimeout(function() {
        $(".session-msg").removeClass("show-msg");
    }, 5000);
    $(".card-projects").hover(
        function() {
            $(this).children(".overlays").addClass("overlay-showup");
        },
        function() {
            $(this).children(".overlays").removeClass("overlay-showup");
        }
    );


    $(".all-item-button").addClass("buttons-bg");
    $(".btn-bg-js").click(function() {
        var dataInfoValue = $(this).data("info");
        $(".btn-bg-js").removeClass("buttons-bg");
        $(this).addClass("buttons-bg");

    });
    $(".nav-item-buttons").click(function() {

        $(".all-cards-project").hide();
        $(".all-cards-project." + $(this).data("info")).fadeIn();
    });
    $(".all-item-button").click(function() {

        $(".all-cards-project").fadeIn();

    });
});