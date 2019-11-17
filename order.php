<?php
$isSend = false;
$to = "uin-a@mail.ru";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    mail(
        "uin-a@mail.ru", 
        "Новый заказ", 
        "Новый заказ от клиента " . $_POST['user_name'] . ", телефон: " . $_POST['user_phone'] . ". Выбранный смеситель: " . $_POST['user_smesitel'] . ". Выбранная полка: " . $_POST['user_shelf']  . ". Выбранный сифон: " . $_POST['user_sifon']
    );
    $isSend = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ERRA</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap&subset=cyrillic" rel="stylesheet">
</head>
<body>
<div class="header nav">
    <div class="container">
        <div class="row justify-content-between">
            <a href="index.html">
                <img class="logo ml-3" src="img/color-erra.svg" alt="">
            </a>
            <div class="d-flex align-items-center">
                <div class="phone phone-white mr-3">8 800 201 28 26</div>
                <a href="">
                    <div class="ml-3 mr-3 order">Оплатить</div>
                </a>
            </div>            
        </div>
    </div>
</div>
<main id="details">
    <div class="container">
        <div class="row">
            <div class="col-md-6 details-block">
                <div class="details-block-title">Ваш комплект</div>
                <div class="d-flex">
                    <img style="height: 15px; margin: 5px 10px;" src="img/check.svg">
                    <div style="text-align: left !important; margin-bottom: 5px;" class="section-title">Устройство ERRA</div>
                </div>
                <div class="d-flex">
                    <img style="height: 15px; margin: 5px 10px;" src="img/check.svg">
                    <div style="text-align: left !important; margin-bottom: 5px;" class="section-title">Cмеситель <?= $_GET['smesitel'] ?></div>
                </div>          
                <div style="text-align: left !important; margin-bottom: 0px;" class="section-title"><?= $_GET['shelf'] ?></div>
                <div style="text-align: left !important; margin-bottom: 0px;" class="section-title"><?= $_GET['sifon'] ?></div>
                <?php if(!$isSend): ?>
                    <div style="margin: 30px 0 5px;">Отправьте заявку и дождитесь звонка менеджера:</div>
                    <form action="" method="POST">
                        <input type="text" name="user_name" placeholder="Имя">
                        <input type="tel" name="user_phone" placeholder="Номер телефона">
                        <input type="hidden" name="user_smesitel" value="<?= $_GET['smesitel'] ?>">
                        <input type="hidden" name="user_shelf" value="<?= $_GET['shelf'] ?>">
                        <input type="hidden" name="user_sifon" value="<?= $_GET['sifon'] ?>">
                        <div class="dflex">
                            <a href="details.html" class="btn-cancel-order">Отменить</a>
                            <button type="submit" class="btn-access-order">Отправить</button>
                        </div>
                    </form>
                <?php else: ?>
                    <div style="margin: 30px 0 5px;">Мы приняли Вашу заявку. Благодарим Вас!</div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>
<section class="">
    <div class="container">
        <div class="row mb-3 flex-column align-items-center">
            <div class="col-md-8 d-flex flex-column align-items-center">
                <div class="section-title">С этим товаром заказывают</div>
                <div style="background: #0047bb; height: 3px; width: 100px; margin-bottom: 10px;"></div>
                <div class="section-sub-title">Подставка на ванну - это классический аксессуар, который позволит вам совместить приятное времяпровождение и пользу. Вы сможете разложить на специальной подставке свою любимую книгу, планшет или телефон, а также бокал с вином.</div>
            </div>
            <div class="row">
                <div class="product" data-toggle="modal" data-target="#Modal1">
                    <div class="product-image">
                        <img src="img/product/ZELLER.jpg" alt="Avatar">
                    </div>
                    <div class="product-name">Zeller</div>    
                </div>
                <div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row justify-content-between">
                                    <div class="col-md-4">
                                        <div class="row flex-column align-items-center mb-3">
                                            <img class="modal-img" src="img/product/ZELLER.jpg" alt="Avatar">
                                            <div>
                                                <div class="section-title">Zeller</div>
                                                <a href="order.php">
                                                    <a href="order.php?shelf=Полка Zeller"><div class="add-cart">Добавить в комплект</div></a>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Цена</div>
                                                    <div class="section-title">4 983Р</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Тип</div>
                                                    <div>Раздвижная полка</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Материал</div>
                                                    <div>Металл, дерево</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Размер, см</div>
                                                    <div>70-105 х 22 х 4</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Страна производитель</div>
                                                    <div>Германия</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product" data-toggle="modal" data-target="#Modal2">
                    <div class="product-image">
                        <img src="img/product/UMBRA.jpg" alt="Avatar">
                    </div>
                    <div class="product-name">Umbra</div>    
                </div>
                <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row justify-content-between">
                                    <div class="col-md-4">
                                        <div class="row flex-column align-items-center mb-3">
                                            <img class="modal-img" src="img/product/UMBRA.jpg" alt="Avatar">
                                            <div>
                                                <div class="section-title">Umbra</div>
                                                <a href="order.php">
                                                    <a href="order.php?shelf=Полка Umbra"><div class="add-cart">Добавить в комплект</div></a>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Цена</div>
                                                    <div class="section-title">4 390Р</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Тип</div>
                                                    <div>Раздвижная полка</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Материал</div>
                                                    <div>Дерево</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Страна производитель</div>
                                                    <div>Китай</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product" data-toggle="modal" data-target="#Modal3">
                    <div class="product-image">
                        <img src="img/product/BAMBOO.jpg" alt="Avatar">
                    </div>
                    <div class="product-name">Bamboo</div>    
                </div>
                <div class="modal fade" id="Modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row justify-content-between">
                                    <div class="col-md-4">
                                        <div class="row flex-column align-items-center mb-3">
                                            <img class="modal-img" src="img/product/BAMBOO.jpg" alt="Avatar">
                                            <div>
                                                <div class="section-title">Bamboo</div>
                                                <a href="order.php">
                                                    <a href="order.php?shelf=Полка Bamboo"><div class="add-cart">Добавить в комплект</div></a>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Цена</div>
                                                    <div class="section-title">3 699Р</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Тип</div>
                                                    <div>Раздвижная полка</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Материал</div>
                                                    <div>Металл, дерево</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Размер, см</div>
                                                    <div>69,9-104,5 х 22,2 х 4,4</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Страна производитель</div>
                                                    <div>Китай</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="background: #0047bb; height: 3px; width: 100px; margin: 30px 0 10px;"></div>
            <div class="col-md-8 section-sub-title">Слив-перелив - это система, обеспечивающая спуск воды из ванной в канализацию и предохраняющая ванну от переполнения.</div>
            <div class="row">
                <div class="product" data-toggle="modal" data-target="#Modal4">
                    <div class="product-image">
                        <img src="img/product/HANSGROHE.jpg" alt="Avatar">
                    </div>
                    <div class="product-name">Hansgrohe</div>    
                </div>
                <div class="modal fade" id="Modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row justify-content-between">
                                    <div class="col-md-4">
                                        <div class="row flex-column align-items-center mb-3">
                                            <img class="modal-img" src="img/product/HANSGROHE.jpg" alt="Avatar">
                                            <div>
                                                <div class="section-title">Hansgrohe</div>
                                                <a href="order.php">
                                                    <a href="order.php?shelf=Слив-перелив Hansgrohe"><div class="add-cart">Добавить в комплект</div></a>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Цена</div>
                                                    <div class="section-title">4 810Р</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Вид слива-перелива</div>
                                                    <div>полуавтоматический (тросик)</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Материал</div>
                                                    <div>Пластик</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Для слива диаметром, см</div>
                                                    <div>5,2</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Диаметр подключения, см</div>
                                                    <div>5</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Высота и длина, см</div>
                                                    <div>10,3 и 61</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Гидрозатвор</div>
                                                    <div>Есть</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Регулировка по высоте, см</div>
                                                    <div>50</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Гарантия</div>
                                                    <div>5 лет</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Страна производитель</div>
                                                    <div>Германия</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product" data-toggle="modal" data-target="#Modal5">
                    <div class="product-image">
                        <img src="img/product/TIMO.jpg" alt="Avatar">
                    </div>
                    <div class="product-name">Timo 8004</div>    
                </div>
                <div class="modal fade" id="Modal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row justify-content-between">
                                    <div class="col-md-4">
                                        <div class="row flex-column align-items-center mb-3">
                                            <img class="modal-img" src="img/product/TIMO.jpg" alt="Avatar">
                                            <div>
                                                <div class="section-title">Timo 8004</div>
                                                <a href="order.php">
                                                    <a href="order.php?shelf=Слив-перелив Timo 8004"><div class="add-cart">Добавить в комплект</div></a>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Цена</div>
                                                    <div class="section-title">3 800Р</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Вид слива-перелива</div>
                                                    <div>автоматический (клик-клак)</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Материал</div>
                                                    <div>Латунь (цвет хром)</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Для слива диаметром, см</div>
                                                    <div>5,2</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Диаметр подключения, см</div>
                                                    <div>4</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Гидрозатвор</div>
                                                    <div>Есть</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Гарантия</div>
                                                    <div>5 лет</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Страна производитель</div>
                                                    <div>Финляндия</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product" data-toggle="modal" data-target="#Modal6">
                    <div class="product-image">
                        <img src="img/product/RADAWAY.jpg" alt="Avatar">
                    </div>
                    <div class="product-name">Radaway R135</div>    
                </div>
                <div class="modal fade" id="Modal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row justify-content-between">
                                    <div class="col-md-4">
                                        <div class="row flex-column align-items-center mb-3">
                                            <img class="modal-img" src="img/product/RADAWAY.jpg" alt="Avatar">
                                            <div>
                                                <div class="section-title">Radaway R135</div>
                                                <a href="order.php">
                                                    <a href="order.php?shelf=Слив-перелив Radaway"><div class="add-cart">Добавить в комплект</div></a>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Цена</div>
                                                    <div class="section-title">2 850Р</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Вид слива-перелива</div>
                                                    <div>автоматический (клик-клак)</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Материал</div>
                                                    <div>Пластик (цвет хром)</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Для слива диаметром, см</div>
                                                    <div>5</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Диаметр подключения, см</div>
                                                    <div>5</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Высота и длина, см</div>
                                                    <div>14,5 и 28</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Гидрозатвор</div>
                                                    <div>Есть</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Дополнительные функции</div>
                                                    <div>возможность регулировки по высоте, самоочищение</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Гарантия</div>
                                                    <div>3 года</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div>Страна производитель</div>
                                                    <div>Польша</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <img style="height: 20px;" src="img/color-erra.svg" alt="">
            <div>
                <i style="margin-right: 10px;" class="fa fa-instagram fa-2x" aria-hidden="true"></i>
                <i class="fa fa-vk fa-2x" aria-hidden="true"></i>
            </div>
        </div>
    </div>
    <div style="text-align: center; font-size: 14px; font-weight: 100; margin-top: 15px;">
        © Copyright 2019 ERRA - Современная сантехника
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>