<?php

namespace app\components\telegram;

class ReplyKeyboardButton
{
    /**
     * @param $text
     * @param bool $request_contact
     * @param bool $request_location
     */
    public static function create(
        $text,
        $request_contact = false,
        $request_location = false
    ){
        // checking arguments
        $check = [
            $text,
            $request_contact,
            $request_location,
        ];
        $check = array_filter($check);
        if (count($check) > 1) {
            throw new \InvalidArgumentException('Please select exactly one of the optional fields');
        }
        // creating instance
        return (compact(
            'text',
            'request_contact',
            'request_location'
        ));
    }
}