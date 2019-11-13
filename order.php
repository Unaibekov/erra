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
    <a style="margin-left: 5%;" href="index.html">
        <img class="logo" src="img/color-erra.svg" alt="">
    </a>
    <div class="header-right-block dflex a-center">
        <div class="phone phone-white">8 800 201 28 26</div>
    </div>
</div>
<main id="details">
    <div class="details-block">
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
</main>
<section>
    <div class="container">
    <div class="row flex-column align-items-center">
        <div class="section-title">С этим товаром заказывают</div>
        <div style="background: #0047bb; height: 3px; width: 100px; margin-bottom: 10px;"></div>
        <div class="col-md-8 section-sub-title">Подставка на ванну - это классический аксессуар, который позволит вам совместить приятное времяпровождение и пользу. Вы сможете разложить на специальной подставке свою любимую книгу, планшет или телефон, а также бокал с вином.</div>
        </div>
		<div class="row align-items-center justify-content-center">
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
        <div style="background: #0047bb; height: 3px; width: 100px; margin-bottom: 10px;"></div>
        <div class="col-md-8 section-sub-title">Слив-перелив</div>
        <div class="row align-items-center justify-content-center">
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

    </div>        
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>