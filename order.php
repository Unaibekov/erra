<?php
$isSend = false;
$to = "gelmutdm@gmail.com";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    mail(
        "gelmutdm@gmail.com", 
        "Новый заказ", 
        "Новый заказ от клиента " . $_POST['user_name'] . ", телефон: " . $_POST['user_phone'] . ". Выбранный смеситель: " . $_POST['user_smesitel']
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
        <div class="dflex">
            <img style="height: 15px; margin: 5px 10px;" src="img/check.svg">
            <div style="text-align: left !important; margin-bottom: 5px;" class="section-title">Устройство ERRA</div>
        </div>
        <div class="dflex">
            <img style="height: 15px; margin: 5px 10px;" src="img/check.svg">
            <div style="text-align: left !important; margin-bottom: 5px;" class="section-title">Cмеситель <?= $_GET['smesitel'] ?></div>
        </div>
        <!--<div class="dflex">
            <img style="height: 15px; margin: 5px 10px;" src="img/check.svg">
            <div style="text-align: left !important; margin-bottom: 0px;" class="section-title">{Cопутствующий товар}</div>
        </div>-->
        <?php if(!$isSend): ?>
            <div style="margin: 30px 0 5px;">Отправьте заявку и дождитесь звонка менеджера:</div>
            <form action="" method="POST">
                <input type="text" name="user_name" placeholder="Имя">
                <input type="tel" name="user_phone" placeholder="Номер телефона">
                <input type="hidden" name="user_smesitel" value="<?= $_GET['smesitel'] ?>">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>