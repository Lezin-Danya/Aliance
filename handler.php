<?php

$user_name = htmlspecialchars($_POST["username"]);
$user_phone = htmlspecialchars($_POST["userphone"]);

$token = "6095025799:AAEQ5a_4TTBn1JdikQTY9KBgvMECUbxDtVM";
$chat_id = "-909926530";

$formData = array(
  "Клиент: " => $user_name,
  "Телефон: " => $user_phone,
);

foreach($formData as $key => $value) {
  $text .= $key . "<b>" . urlencode($value) . "</b>" . "%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

if ($sendToTelegram) {
  echo "Success";
} else {
  echo "Error";
};
