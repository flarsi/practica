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

    $(".submit").on("click", function () {
        let busket = new Basket()
        busket.create()
        $(".basket").val()
        console.log(localStorage)
    })
    // localStorage.clear()

    $(".products-in-basket").text("В вашей корзине: " + localStorage.length)
    if(localStorage.length >= 5){
        $(".tovari").text("товаров")
    }

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

class Basket {
    constructor() {
        this.basket = new Products();
    }

    create() {
        this.basket['products'].map(function (element) {
            localStorage.setItem("product:"+localStorage.length, "name=" + element['name'] +
                ";price=" + element['price']+ ";count=" + element['count'])

        })
    }

    load(){
        let count = 0;
        $.map(localStorage, function (element, index) {
            if (index.split(":")[0] == "product") {
                let product = extractFromStorage(element);
                $(".order").append("<div id='" + index + "' class=\"row product m-1\">\n" +
                    "                            <div class=\"col-4 product-name\">" + product[0][1] + "</div>\n" +
                    "                            <div class=\"col-3 product-count\">" + product[1][1] + " шт.</div>\n" +
                    "                            <div class=\"col-3 product-price\">" + product[2][1] + " р.</div>\n" +
                    "                            <div id='" + index + "' class=\"col-2\"><img class=\"cross\" src=\"../public/images/cross.png\" alt=\"\"></div>\n" +
                    "                        </div>")
                count++
                if (localStorage.length == count) {
                    $(".order").append("<button class=\"buy-button m-0\" style=\"text-transform: lowercase\">Оформить заказ</button>")
                }
            }
        })
    }
}

class Products {
    constructor() {
        let products = []
        $.map($(".products .produc"), function (element) {
            let product = new Product($(element).find(".product_name").text(),
                $(element).find(".product_price").text(),
                $(element).find("div.col").find(".counter").val())

            if($(element).find("div.col").find(".counter").val() >= 1)
            products.push(product)
        })
        this.products = products;
    }
}

class Product {
    constructor(name, price, count) {
        this.name = name
        this.price = price
        this.count = count
    }
}

function extractFromStorage(storage) {
    let elements
        elements = storage.split(";")
        $.each(elements, function (index) {
            elements[index] = elements[index].split("=")
        })

    return elements
}