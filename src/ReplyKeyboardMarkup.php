<?php

namespace Shakibonline;

class ReplyKeyboardMarkup
{
    public static function create($keyboard = [])
    {
        return (compact('keyboard'));
    }
}