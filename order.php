<?php
$isSend = false;
$to = "uin-a@mail.ru";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    mail(
        $to,
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
                                                <a href="?<?= http_build_query(array_merge(['shelf' => 'Полка Zeller'], $_GET)); ?>"><div class="add-cart">Добавить в комплект</div></a>
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
<<<<<<< HEAD
                                                    <a href="order.php?shelf=Слив-перелив Hansgrohe"><div class="add-cart">Добавить в комплект</div></a>
=======
                                                    <a href="order.php?sifon=Слив-перелив Hansgrohe"><div class="add-cart">Добавить в комплект</div></a>
>>>>>>> 9c00a2f943a77ad35e37ec13a320e4e904bd5d3d
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
                                                    <a href="order.php?sifon=Слив-перелив Timo 8004"><div class="add-cart">Добавить в комплект</div></a>
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
                                                    <a href="order.php?sifon=Слив-перелив Radaway"><div class="add-cart">Добавить в комплект</div></a>
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
            <div class="d-flex">
                <a href="https://www.instagram.com/erra.su/" target="blank">
                    <svg class="mr-3 evendodd" width="32px" height="32px" viewBox="0 0 32 32">
                        <path d="M22 0H10C4.478 0 0 4.478 0 10V22C0 27.522 4.478 32 10 32H22C27.522 32 32 27.522 32 22V10C32 4.478 27.522 0 22 0ZM29 22C29 25.86 25.86 29 22 29H10C6.14 29 3 25.86 3 22V10C3 6.14 6.14 3 10 3H22C25.86 3 29 6.14 29 10V22Z" fill="white"/>
                        <path d="M16 8C11.582 8 8 11.582 8 16C8 20.418 11.582 24 16 24C20.418 24 24 20.418 24 16C24 11.582 20.418 8 16 8ZM16 21C13.244 21 11 18.756 11 16C11 13.242 13.244 11 16 11C18.756 11 21 13.242 21 16C21 18.756 18.756 21 16 21Z" fill="white"/>
                        <path d="M24.6001 8.466C25.1888 8.466 25.6661 7.98874 25.6661 7.4C25.6661 6.81127 25.1888 6.33401 24.6001 6.33401C24.0113 6.33401 23.5341 6.81127 23.5341 7.4C23.5341 7.98874 24.0113 8.466 24.6001 8.466Z" fill="white"/>								
                    </svg>
                </a>
                <a href="https://vk.com/errasu" target="blank">
                    <svg class="mr-3 evendodd" width="32px" height="32px" viewBox="0 0 32 32">
                        <path d="M30.6745 21.6143C29.7218 20.4716 28.6006 19.4963 27.5397 18.4606C26.5827 17.5271 26.5223 16.9856 27.2917 15.9082C28.1314 14.7322 29.0344 13.6014 29.8816 12.4308C30.6726 11.3368 31.481 10.2457 31.8972 8.93585C32.1612 8.10249 31.9277 7.73439 31.0732 7.58848C30.9259 7.56294 30.7737 7.56161 30.6238 7.56161L25.5537 7.55565C24.9292 7.54636 24.584 7.81862 24.3632 8.37209C24.065 9.12023 23.7576 9.8677 23.4025 10.5896C22.5966 12.2265 21.6966 13.8087 20.4348 15.1484C20.1566 15.4439 19.8488 15.8173 19.3839 15.6634C18.8022 15.4512 18.6308 14.4928 18.6404 14.1688L18.6354 8.31671C18.5227 7.4807 18.3373 7.10796 17.5072 6.94547L12.2405 6.94646C11.5374 6.94646 11.1849 7.21806 10.8095 7.65778C10.593 7.91181 10.5276 8.07662 10.9727 8.16085C11.8468 8.32666 12.3393 8.89241 12.4699 9.76888C12.6795 11.1693 12.6649 12.5754 12.5442 13.9814C12.5087 14.392 12.4381 14.8015 12.2753 15.1849C12.0206 15.7874 11.6094 15.9101 11.0692 15.5394C10.58 15.2038 10.2365 14.7302 9.90022 14.2547C8.63708 12.4699 7.62928 10.5452 6.80753 8.52265C6.57009 7.93834 6.16054 7.58416 5.54141 7.57455C4.02026 7.55034 2.49879 7.54636 0.977653 7.57587C0.0623817 7.59312 -0.210541 8.03749 0.162199 8.8672C1.81897 12.5525 3.66311 16.1353 6.07034 19.3991C7.30629 21.0741 8.72529 22.5528 10.5585 23.6007C12.6361 24.7886 14.8725 25.1461 17.228 25.036C18.331 24.9843 18.6623 24.6974 18.7133 23.5981C18.7478 22.846 18.8331 22.0982 19.2041 21.4223C19.5683 20.7591 20.1197 20.6327 20.7555 21.0453C21.0735 21.2519 21.3414 21.5149 21.5945 21.7921C22.2153 22.4712 22.8138 23.171 23.4582 23.8272C24.2663 24.6497 25.2237 25.1355 26.4275 25.0363L31.0874 25.0373C31.8382 24.9882 32.2275 24.0677 31.7964 23.2297C31.4936 22.6427 31.0964 22.1201 30.6745 21.6143Z" fill="white"/>		
                    </svg>
                </a>
                <a href="https://www.facebook.com/www.erra.su/" target="blank">
                    <svg class="evendodd" width="32px" height="32px" viewBox="0 0 32 32">
                        <path d="M27.6879 0H4.31231C1.93087 0 0.000244141 1.93055 0.000244141 4.31206V27.6878C0.000244141 30.0693 1.93079 31.9998 4.31231 31.9998H15.841L15.8607 20.5648H12.8899C12.5038 20.5648 12.1904 20.2526 12.1889 19.8666L12.1747 16.1806C12.1732 15.7924 12.4875 15.4769 12.8757 15.4769H15.8411V11.9153C15.8411 7.78215 18.3654 5.53159 22.0525 5.53159H25.078C25.4651 5.53159 25.779 5.84542 25.779 6.23259V9.34063C25.779 9.72764 25.4653 10.0414 25.0784 10.0416L23.2217 10.0425C21.2165 10.0425 20.8283 10.9953 20.8283 12.3936V15.477H25.2343C25.6541 15.477 25.9798 15.8436 25.9303 16.2605L25.4934 19.9465C25.4516 20.2992 25.1525 20.565 24.7974 20.565H20.8479L20.8283 32H27.688C30.0695 32 32 30.0695 32 27.688V4.31206C31.9999 1.93055 30.0694 0 27.6879 0Z" fill="white"/>
                    </svg>
                </a>
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