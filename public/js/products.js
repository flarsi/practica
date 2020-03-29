$(document).ready(function () {
    $.ajax({
        type: "get",
        url: document.location.origin + "/products/get-all",
        dataType: "json",
        processData: false,
        headers: {'Content-Type': 'application/json'},
        success: function (data) {
            console.log(data);
        },
        error: function (data) {
            console.log(data);
        },
    });
    console.log(document.location.origin + "/products/get-all");

});
