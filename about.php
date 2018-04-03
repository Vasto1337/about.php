<html>

<title>Юхвиц Владимир</title>

<body>

<?php
$name = 'Владимир';
$age = '25';
$city = 'Москва';
if (isset($name) && isset($age)) {
    ?>
    <div>
        <h2>Имя</h2>
        <p><?= $name ?></p>
    </div>
    <div>
        <h2>Возраст</h2>
        <p><?= $age ?></p>
    </div>
<?php } else {  ?>
<div><h2>Информация не найдена</h2></div>
}

<?php
$mail = 'Vastod3@gmail.com';
if(isset($mail)) {
    ?>
    <civ>
        <h2>Почта</h2>
        <p><?= $mail ?></p>
    </civ>
<?php } else { ?>
<div><h2>Информация не найдена</h2></div>
}

<?php
$info = 'Kappa';
if(isset($info)) {
    ?>
    <civ>
        <h2>Информация о себе</h2>
        <p><?= $info ?></p>
    </civ>
<?php } else { ?>
<div><h2>Информация не найдена</h2></div>

</body>

</html>

<?php}