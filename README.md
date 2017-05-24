# Simple telegram keyboards Bot API Helper

Simply create telegram Inline/Reply keyboards. 


## install
```text
composer require shakibonline/telegram-keyboards-helper
```

## Usage  

You can find tested code in [`example.php`](https://github.com/shakibonline/TelegramKeyboardsHelper/blob/master/example.php) file.

```php
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
```