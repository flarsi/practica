<?php require "layouts/header.view.php"?>

<div class="row body">
    <div class="col-1"></div>
    <div class="col-10">
        <div class="content row">
            <div class="col-9">
                <div class="col row">
                    <a href="" class="path">Главная</a>>>
                    <a href="" class="path">Товары для детей</a>>>
                    <a href="" class="path">Коляски</a>>>
                    <a href="" class="path">Детские коляски</a>
                </div>
                <div class="col">
                    <div class="col big-text" style="font-size: 16pt">Lorem ipsum dolor sit amet.</div>
                    <div class="col row">
                    <div class="col-6"><img src="../public/images/kolaska.png" alt=""></div>
                    <div class="col-6">
                        <div class="col price">14590 Р.</div>
                        <div class="col"></div>
                        <div class="col">
                            <table>
                                <tbody>
                                <tr>
                                    <td>Тип</td>
                                    <td>Прогулочная</td>
                                </tr>
                                <tr>
                                    <td>Количество блоков</td>
                                    <td>Один</td>
                                </tr>
                                <tr>
                                    <td>Механизм складывания</td>
                                    <td>Трость</td>
                                </tr>
                                <tr>
                                    <td>Количество колес</td>
                                    <td>8</td>
                                </tr>
                                <tr>
                                    <td>Колеса</td>
                                    <td>Резиновые</td>
                                </tr>
                                <tr>
                                    <td>Максимальный возраст</td>
                                    <td>3 года</td>
                                </tr>
                                <tr>
                                    <td>Цвет</td>
                                    <td>Синий</td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td>
                                        <img class="m-2" src="../public/images/nal.png" alt="">
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="col">
                            <button class="buy-button m-2">
                                <img src="../public/images/basket-icon.png" class="m-1" alt="">купить
                            </button>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col description m-3">
                    <div class="col h4">Описание</div>
                    <div class="col h6">
                        <p>Коляска Silver Cross Balmoral - настоящее произведение искусства.Этапы производства в этой коляске
                            включают операции,выполняемые вручную.</p>
                        <p>Селин Дион, Кэтрин Зета-Джонс,британский премьер Тони Блэр,принцесса Монако Каролина,Мик Джагер,
                            Бэкхемы,Роберт де Ниро,Брук Шилдс,Лиз Херли,Питер Гебриэл,Эль Макферсон и другие
                            Celebrity-персоны для своих детей выбирают коляски фирмы Silver Croos.</p>
                        </div>
                </div>
            </div>
            <div class="col-3 right-bar ">
                <div class="row basket p-3">
                    <div class="col">
                        <div class="col text m-1">В вашей корзине</div>
                        <div class="col text m-1">товаров</div>
                        <div class="col m-1"><input type="button" class="basket-button btn btn-primary" value="оформить"></div>
                    </div>
                </div>

                <div class="weight-slide">
                    <div class="m-1 ">
                        <div class="col p-0">
                            <div class="col big-text">Цена руб.</div>
                            <div class="col m-2">
                                от<input type="text" class="from-price">
                                до<input type="text" class="before-price">
                            </div>
                            <div class="col">
                                <div id="price-range"></div>
                            </div>
                        </div>

                        <div class="col p-0">
                            <div class="col big-text">Вес Кг.</div>
                            <div class="col m-2">
                                от<input type="text" class="from-weight">
                                до<input type="text" class="before-weight">
                            </div>
                        </div>
                        <div class="col">
                            <div id="weight-range"></div>
                        </div>
                    </div>
                </div>

                <div class="sprite p-3">
                    <div class="col big-text p-0 m-0">Характеристики</div>
                    <div class="col row">
                        <div class="img plus"></div>
                        <div class="disable text col">Механизм складования</div>
                    </div>
                    <div class="col row">
                        <div class="img plus"></div>
                        <div class="disable text col">Количество колес</div>
                    </div>
                    <div class="col row">
                        <div class="img plus"></div>
                        <div class="disable text col">колеса</div>
                    </div>
                    <div class="col row">
                        <div class="img plus"></div>
                        <div class="disable text col">Максимальный возраст
                            <div class="col">Красный</div>
                            <div class="col">Желтый</div>
                            <div class="col">Фиолетовый</div>
                            <div class="col">Злулуный</div>
                            <div class="col">Пурпурный</div></div>
                    </div>
                    <div class="col row">
                        <div class="img plus"></div>
                        <div class="disable text col">Цвет
                            <div class="col">Красный</div>
                            <div class="col">Желтый</div>
                            <div class="col">Фиолетовый</div>
                            <div class="col">Злулуный</div>
                            <div class="col">Пурпурный</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider"></div>
        <div class="info"></div>
    </div>
    <div class="col-1"></div>
</div>

<?php require "layouts/footer.view.php"?>
