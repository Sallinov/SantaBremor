<?php

$recepient = "vladislavlad_11@mail.ru";
$sitename = "Santa-Bremor";

$name = trim($_POST["name"]);
$phone = trim($_POST["email"]);
$text = trim($_POST["text"]);
$message = "Имя: $name \nПочта: email \nТекст: $text";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>
