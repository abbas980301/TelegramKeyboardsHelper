<?php

namespace app\components\telegram;

use Symfony\Component\Translation\Exception\InvalidArgumentException;

class InlineKeyboardButton
{
    public $text;
    public $url;
    public $callback_data;
    public $switch_inline_query;
    public $switch_inline_query_current_chat;
    public $callback_game;
    public $pay;
}