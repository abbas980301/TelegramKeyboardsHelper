<?php

namespace shakibonline;

class ReplyKeyboardRemove
{
    public static function create($remove_keyboard = true, $selective = false)
    {
        return (compact(
            'remove_keyboard',
            'selective'
        ));
    }
}