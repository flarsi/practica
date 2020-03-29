$(document).ready(function () {
    $.ajax({
        type: "get",
        url: document.location.origin + "/products/get-all",
        dataType: 'JSON',
        success: function (data) {
            createProducts(data['data'])
        },
        error: function (data) {
            console.log(data);
        },
    });
});

function createProducts(data) {
    data.forEach(function (element) {
        $(".thead").after("<div class=\"row m-2 produc\" id=\"product-"+element["id"]+"\">\n" +
            "                            <div class=\"col-2\"><img style=\"height: 100px; border-radius: 5px\" src=\"../public/images/"+element['img_name']+".png\" alt=\"\"></div>\n" +
            "                            <div class=\"col-2 big-text product_name\">"+element['name']+"</div>\n" +
            "                            <div class=\"col-2 big-text product_price\">"+element['price']+"</div>\n" +
            "                            <div class=\"col-3 text\">"+element['desc']+"</div>\n" +
            "                            <div class=\"col\"><input class=\"counter\" type=\"number\" value=\"0\"></div>\n" +
            "                        </div>\n")
    })
}