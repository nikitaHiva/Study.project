<?php
//	if (!empty($_REQUEST['name'])) {
//        $city = $_REQUEST['name'];
//        echo 'Привет, '.$city;
//    } else {
//	    echo 'Введите имя';
//    }
//////////////////////////////////
//if (!empty($_REQUEST['name']) && !empty($_REQUEST['old']) && !empty($_REQUEST['massage']) ) {
//    $name = strip_tags($_REQUEST['name']);
//    $old = strip_tags($_REQUEST['old']);
//    $massage = strip_tags($_REQUEST['massage']);
//    echo 'Привет, ', $name, ' ', $old, ' Лет', '<br>';
//    echo $massage;
//} else {
//    echo 'Введите данные заного';
//}
////////////////////////////////////////////////////////////////////////////
$login = 'nina225';
$pas = 'qwerty';
?>
<form action="" method="get">
    <input type="text" name="login" placeholder="Логин"><br>
    <input type="password" name="pas" placeholder="Пароль"><br>
    <input type="submit">
</form>
<?php
if ($login == $_REQUEST['login'] && $pas == $_REQUEST['pas']) {
    echo 'Пароль и логин подходят';
} else {
    echo 'Либо пароль, либо логин неверный';
}
