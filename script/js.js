$(document).ready(function () {
    $(".sprite .row .img").on("click", function () {
        $(this).toggleClass("plus")
        $(this).toggleClass("minus")
        $(this).siblings(".text").toggleClass("disable")
        $(this).siblings(".text").toggleClass("active")
    })

    $(".sprite .row .text").on("click", function () {
        $(this).toggleClass("disable")
        $(this).toggleClass("active")
        $(this).siblings(".img").toggleClass("plus")
        $(this).siblings(".img").toggleClass("minus")
    })
});

$( function() {
    $("#price-range").slider({
        range: true,
        min: 0,
        max: 100,
        values: [ 25, 75 ],
        slide: function( event, ui ) {
            $(".from-price").val(ui.values[ 0 ])
            $(".before-price").val(ui.values[ 1 ])
        }
    });
} );

$( function() {
    $("#weight-range").slider({
        range: true,
        min: 0,
        max: 100,
        values: [ 25, 75 ],
        slide: function( event, ui ) {
            $(".from-weight").val(ui.values[ 0 ])
            $(".before-weight").val(ui.values[ 1 ])
        }
    });
} );