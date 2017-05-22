<?php

namespace app\components\telegram;

class InlineKeyboardMarkup
{
    public static function create(InlineKeyboardButton $button)
    {
        $inline_keyboard = get_object_vars($button);
        $inline_keyboard = array_filter($inline_keyboard);
        if (count($inline_keyboard) > 2) {
            echo 'Wrong';
        }
        return array(
            'inline_keyboard' => array(
                $inline_keyboard
            ),
        );
    }
}