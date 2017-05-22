<?php

namespace shakibonline;

class ReplyKeyboardMarkup
{
    public static function create($keyboard = [])
    {
        return (compact('keyboard'));
    }
}