<?php

    $name = $_POST["Name"];
    $email = $_POST["Mail"];
    $phone = $_POST["Phone_number"];
    $message = $_POST["Comment"];

    $arr = array(
        'Имя: ' => $name,
        'Email: ' => $email,
        'Номер телефона: ' => $phone,
        'Сообщение: ' => $message
    );
      
    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
    };


    $token = "6093894483:AAE59VSrIR83WbMHzr8DjrUWVipwDgai9PE";
    $chat_id = "-1001955788606";

    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
    // return true;
?>