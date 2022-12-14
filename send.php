<?php

$name = $_POST['name'];
$phone = preg_replace('/\s|\+|-|\(|\)/','', $_POST['phone']);
$quest = $_POST['quest'];
if (preg_match('/^[0-9]{11}$/', $phone)) {
    $apiToken = "5388289094:AAEdGMziMn5rpL_hfmkZalhxjW-00NVTgQs";
    $data = [
       'chat_id' => '-1001513821178',
       'text' => "Имя: " . $name . "\nНомер телефона: " . $phone . "\nВопрос: " .  $quest];
    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
    header("Location: https://yurist-tagirova.ru");
    exit( );
}
else{
    echo 'Введен не верный номер телефона, попробуйте еще раз<br> <a href="https://yurist-tagirova.ru">Вернуться на главную</a>';
}

?>