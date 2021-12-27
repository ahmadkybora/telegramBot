<?php

include("./vendor/eleirbag89/telegrambotphp/Telegram.php");
include("./vendor/eleirbag89/telegrambotphp/TelegramErrorLogger.php");


date_default_timezone_set("asia/tehran");
// Set the bot TOKEN
$bot_id = "2016260844:AAFeGC136Zj290ubZVwJV6H6Pl8v4AhkuLA";
// Instances the class
$telegram = new Telegram($bot_id);

$text = $telegram->Text(); // متنی که کاربر ارسال میکنه
$username = $telegram->Username(); // نام کاربری کاربر
$name = $telegram->FirstName();
$family = $telegram->LastName();
$message_id = $telegram->MessageID(); // هر پیغام در تلگرام یک آیدی یکتا دارد
$user_id = $telegram->UserID(); // آیدی یکتای کاربر
$chat_id = $telegram->ChatID(); // آیدی مکانی که چت صورت میگیرد، مثل خود بات یا آیدی گروه