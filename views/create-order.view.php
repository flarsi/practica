<?php require "layouts/header.view.php"?>

<div class="row body">
    <div class="col-1"></div>
    <div class="col-10">
        <div class="content row">
            <div class="col-9 order-form align-content-center ">
                <div class="m-5 p-5">
                    <div class="col big-text ">Оформление заказа</div>
                    <div class="col form p-2 m-4">
                        <div class="row p-1">
                            <div class="col-2">ФИО:</div>
                            <div class="col"><input class="order-input" type="text"></div>
                        </div>
                        <div class="row p-1">
                            <div class="col-2">Телефон:</div>
                            <div class="col"><input class="order-input" type="tel"></div>
                        </div>
                        <div class="row p-1">
                            <div class="col-2">E-male:</div>
                            <div class="col"><input class="order-input" type="email"></div>
                        </div>
                    </div>
                    <div class="col order text m-4">
                        Ваш заказ:
<!--                        <div class="row product m-1">-->
<!--                            <div class="col-6 product-name">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>-->
<!--                            <div class="col product-count">1 шт.</div>-->
<!--                            <div class="col product-price">14900 р.</div>-->
<!--                            <div class="col"><img class="cross" src="../public/images/cross.png" alt=""></div>-->
<!--                        </div>-->
<!--                        <div class="row product m-1">-->
<!--                            <div class="col-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>-->
<!--                            <div class="col">1 шт.</div>-->
<!--                            <div class="col">14900 р.</div>-->
<!--                            <div class="col"><img class="cross" src="../public/images/cross.png" alt=""></div>-->
<!--                        </div>-->
<!--                        <button class="buy-button m-0" style="text-transform: lowercase">Оформить заказ</button>-->
                    </div>
                    <div class="col text m-4">
                        <ul>Регистрацыя обязательна для следующих действий:
                            <li>активацыя скидочного купона</li>
                            <li>получение бонусных балов за покупки</li>
                            <li>оплата заказа через интернет</li>
                            <li>оформление заказа на организацию</li>
                        </ul>
                    </div>
                    <div class="col change m-4">
                        <input type="radio" name="register" value="register" checked>Покупка с регистрацыей <br>
                        <input type="radio" name="register" value="logIn">Вход для зарегестрированых пльзоватилей <br>
                    </div>
                </div>
                </div>

            <div class="col-3 right-bar">

            </div>
        </div>
    </div>
    <div class="col-1"></div>
    <script src="../public/js/busket.js"></script>
</div>

<?php require "layouts/footer.view.php"?>
