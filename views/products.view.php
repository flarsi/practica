<?php require "layouts/header.view.php"?>

    <div class="row body">
        <div class="col-1"></div>
        <div class="col-10">
            <div class="content row">
                <div class="col-9">
                    <div class="products">
                        <div class="row m-2 thead">
                            <div class="col-3"></div>
                            <div class="col-2">Название</div>
                            <div class="col-2">цена грн.</div>
                            <div class="col-3">описание</div>
                            <div class="col-2">количество</div>
                        </div>
                        <button type="button" class="m-2 submit float-right btn btn-primary">Submit</button>
                    </div>
                </div>
                <div class="col-3 right-bar ">
                    <div class="row basket p-3">
                        <div class="col">
                            <div class="col text m-1 products-in-basket">В вашей корзине</div>
                            <div class="col text m-1 tovari">товар</div>
                            <div class="col m-1"><a href="/create/order"><input  type="button" class="basket-button btn btn-primary" value="оформить"></a></div>
                        </div>
                    </div>

                    <div class="col brends m-0">
                        <div class="big-text" style="text-align: center; font-size: 13pt">Список брендов</div>
                        <div class="row p-0 m-0">

                            <div class="col-6 p-0 m-0"></div>

                            <div class="col-6 p-0"></div>
                        </div>
                    </div>
                    <div class="col row reclam-2 m-0 p-0">
                        <div class="col-4 p-0 m-2">
                            <img src="../public/images/deliv.png" alt="" class="car-img m-3 h-50">
                        </div>
                        <div class="col-6 p-0 m-1 p-0">
                            <div class="col big-text" style="font-size: 10pt">Бесплатная доставка</div>
                            <div class="col text">по всей Росии!</div>
                        </div>
                    </div>

                    <div class="col news">
                        <div class="big-text col m-0 p-2" style="text-align: center; font-size: 12pt">Новости магазина</div>

                        <div class="col p-2">
                            <div class="news-date col">00/00/2000</div>
                            <div class="news-content">
                                <div>
                                    <a href="" class="news-heading">Заголовок новости</a>
                                </div>
                                <div class="news-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</div>
                                <div class="more-details"><a href="">Подробнее >></a></div>
                            </div>
                        </div>

                        <div class="col p-2">
                            <div class="news-date col">00/00/2000</div>
                            <div class="news-content">
                                <div>
                                    <a href="" class="news-heading">Заголовок новости</a>
                                </div>
                                <div class="news-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</div>
                                <div class="more-details"><a href="">Подробнее >></a></div>
                            </div>
                        </div>

                        <a href="" class="news-all">
                            Читать все новости >>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    <script>

        $(document).ready(function () {
            console.log($(".brends div.col-6"))
            generateRightBar()
        })

        function generateRightBar () {
            fetch('https://restcountries.eu/rest/v2/regionalbloc/eu')
                .then((response) => {
                    return response.json()
                })

                .then((response) => {
                    const arr = [sliceArr(response, 0, Math.floor(response.length/2)),
                    sliceArr(response, Math.floor(response.length/2), response.length)]

                    arr.forEach(function (element, index) {
                        let col = $(".brends div.col-6")[index]

                        element.forEach(function (element) {
                            $(col).append("<a href=\"\" class=\"row m-2 brend-text\">"+ element.capital +"</a>")
                        })
                    })
                })

            function sliceArr(obj, first, second) {
                return obj.slice(first, second)
            }
        }
    </script>
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/public/js/products.js" ></script>

<?php require "layouts/footer.view.php"?>