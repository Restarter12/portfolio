<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение данных из формы
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Проверка наличия данных
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Отправка данных на почту
        $to = "nikitovich60@bk.ru"; // Замените на ваш адрес электронной почты
        $subject = "Новое сообщение от $name";
        $body = "Имя: $name\nEmail: $email\nСообщение: $message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo "Отправлено";
        } else {
            echo "Произошла ошибка при отправке";
        }
    } else {
        echo "Пожалуйста, заполните все поля формы";
    }
}
?>