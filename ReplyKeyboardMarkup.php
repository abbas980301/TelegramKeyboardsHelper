<?php

namespace app\components\telegram;

class ReplyKeyboardMarkup
{
    public static function create($keyboard = [])
    {
        return (compact('keyboard'));
    }
}