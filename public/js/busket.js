$(document).ready(function () {
    let busket = new Basket()
    busket.load()

    $(".product .col-2").on("click", function () {
        localStorage.removeItem(this.id)
        this.closest(".product").remove()
    })
})
