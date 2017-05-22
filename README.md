## Simple telegram keyboards Bot API Helper


## Example 

```php
$button = new InlineKeyboardButton();
        $button->text = 'abbas';
        $button->callback_data = 'Test';

        $inlineKeyboardMarkup = InlineKeyboardMarkup::create($button);
        $option = [
            'chat_id' => 122,
            'text' => 'blablabla',
            'reply_markup' => json_encode($inlineKeyboardMarkup)
        ];
```