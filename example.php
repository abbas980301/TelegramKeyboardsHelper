<?php
require_once 'vendor/autoload.php';

$button = new \Shakibonline\InlineKeyboardButton();
$button->text = 'shakibonline';
$button->callback_data = 'Test';

$inlineKeyboardMarkup = \Shakibonline\InlineKeyboardMarkup::create($button);
$option = [
    'chat_id' => 122,
    'text' => 'blablabla',
    'reply_markup' => json_encode($inlineKeyboardMarkup)
];
var_dump($option);
