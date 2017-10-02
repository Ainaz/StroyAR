<?php
    $msg_box = 1; // в этой переменной будем хранить сообщения формы
    $errors = array(); // контейнер для ошибок
    $success = 'Ваша заявка отправлена!';
    $error_name = 'Ошибка!';
    // проверяем корректность полей
    if($_POST['name'] == "")    $errors[] = "Поле 'Ваше имя' не заполнено!";
    if($_POST['telephone'] == "") $errors[] = "Поле 'Телефон' не заполнено!";
 
    if(empty($errors)){     
        // собираем данные из формы
        $message  = "Имя пользователя: " . $_POST['name'] . "<br/>";
        $message .= "Телефон пользователя: " . $_POST['telephone'];
        send_mail($message); // отправим письмо
        //echo $success;
    }else{
        $msg_box = 0;// если были ошибки, то выводим их
        //echo $error_name;
    }
 
    // делаем ответ на клиентскую часть в формате JSON
    //echo json_encode(array(
        //'result' => $msg_box
    //));
     
     
    // функция отправки письма
    function send_mail($message){
        // почта, на которую придет письмо
        $mail_to = "safin-ainaz@mail.ru"; 
        // тема письма
        $subject = "Письмо с обратной связи";
         
        // заголовок письма
        $headers= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
        $headers .= "From: Тестовое письмо <no-reply@test.com>\r\n"; // от кого письмо
         
        // отправляем письмо 
        mail($mail_to, $subject, $message, $headers);
    }
?>