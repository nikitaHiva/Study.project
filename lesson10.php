<form action="" method="GET">
    <input type="text" name="name" placeholder="Введите имя"><br>
    <input type="text" name="old" placeholder="Введите возраст"><br><br>
    <textarea name="massage" cols="40" rows="10" placeholder="Сообщение"></textarea><br>
	<input type="submit"> <br>
</form>
<?php
//	if (!empty($_REQUEST['name'])) {
//        $city = $_REQUEST['name'];
//        echo 'Привет, '.$city;
//    } else {
//	    echo 'Введите имя';
//    }
//////////////////////////////////
if (!empty($_REQUEST['name']) && !empty($_REQUEST['old']) && !empty($_REQUEST['massage']) ) {
    $name = strip_tags($_REQUEST['name']);
    $old = strip_tags($_REQUEST['old']);
    $massage = strip_tags($_REQUEST['massage']);
    echo 'Привет, ', $name, ' ', $old, ' Лет', '<br>';
    echo $massage;
} else {
    echo 'Введите данные заного';
}



