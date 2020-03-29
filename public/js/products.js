$(document).ready(function () {
    $.ajax({
        type: "get",
        url: document.location.origin + "/products/get-all",
        dataType: 'JSON',
        success: function (data) {
            console.log(data);
        },
        error: function (data) {
            console.log(data);
        },
    });
});
