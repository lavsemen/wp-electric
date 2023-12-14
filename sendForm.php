<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");


const BOT_TOKEN = '6822911521:AAHo_1nx0VPnwp2E8fELFKKDahTONg3vDiI';
const CHAT_ID = '5677224575'; // '877707009';

if(!isset($_POST['name']) || !isset($_POST['phone'])) {
    echo 'Не валидные данные';
    die();
}

function sendMessage($chatID, $messaggio, $token) {
    echo "sending message to " . $chatID . "\n";

    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatID;
    $url = $url . "&text=" . urlencode($messaggio);
    $ch = curl_init();
    $optArray = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

$currentDate = date('d.m.Y в H:i');

$message = "С сайта отправлена новая заявка:\nИмя - {$_POST['name']}\nТелефон - {$_POST['phone']}\nДата заявки - {$currentDate}";

sendMessage(CHAT_ID, $message, BOT_TOKEN);