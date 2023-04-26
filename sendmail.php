<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/Exception.php';
$mail = mew PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('ru', 'phpmailer/language/');
&mail->IsHTML(true);


//от кого письмо;
$mail->setFrom('infp@fls.guru', 'Фрилансер по жизни');
//кому отправить
$mail->addAddress('danikoktysyk@gmail.com', 'Фрилансер по жизни');
//тема письма
$maul->Subject = 'Привет!';

$hand = "Правая";
if($_POST[' hand'] == "left"){
$hand == "Левая" ;
}
// Teло письма
$body = "Встречайте письмо!"

if(trim(!empty($_POST[ 'name' ]))) {
    $body.='<p><strong>Имя:</strong> '.$_POST['name'].'</p>';
}
if(trim(!empty($_POST[ 'email' ]))) {
    $body.='<p><strong>E-mail:</strong> '.$_POST['email'].'</p>';
}
if(trim(!empty($_POST[ 'hand' ]))) {
    $body.='<p><strong>Рука:</strong> '$hand.'</p>';
}
if(trim(!empty($_POST[ 'age' ]))) {
    $body.='<p><strong>Возраст:</strong> '.$_POST['age'].'</p>';
}
if(trim(!empty($_POST[ 'message' ]))) {
    $body.='<p><strong>Сообщение:</strong> '.$_POST['message'].'</p>';
}

$mail->Bidy = $body

if(!$mail->send()) {
    $message = 'Ошибка';
} else {
    $message = 'Данные отправлены';
}

$response = ['messege'=> $message];


header('Content-type: application/json');
echo json_encode($response);
?>