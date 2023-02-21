<?php
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $to = 'info@azimutelematika.ru';
  $subject = 'Заказ услуги';
  $message = 'Телефон: '.$phone.' Имя: '.$name;
  $headers = 'From:
  ' . "\r\n" .
  'Reply-To: ' . "\r\n" .
  'X-Mailer: PHP/' . phpversion();
  mail($to, $subject, $message, $headers);
  header('Location: ./');
?>