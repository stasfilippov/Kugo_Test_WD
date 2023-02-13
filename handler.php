<?php
$user_phone = htmlspecialchars($_POST["userphone"]);

$token = "6057128176:AAG0aOOvMrTPnBThYQpWpunpYMvLHlMBjGk";
$chat_id = "-883294798";

$formData = array(
    "Телефон: " => $user_phone
);

foreach($formData as $key => $value) {
    $text .= $key . "<b>" . urlencode($value) . "</b>" . "%0A" ;
} 

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

echo "Ваш телефон: <b>" . $user_phone . "</b>";