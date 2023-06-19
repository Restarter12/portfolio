<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение данных из формы
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Проверка наличия данных
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Отправка данных на почту
        $to = "your-email@example.com"; // Замените на ваш адрес электронной почты
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

<!-- Ваш HTML-код формы -->
<form action="" method="POST">
  <label for="name">Имя:</label>
  <input type="text" id="name" name="name" required><br>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required><br>

  <label for="message">Сообщение:</label>
  <textarea id="message" name="message" required></textarea><br>

  <input type="submit" value="Отправить">
</form>
