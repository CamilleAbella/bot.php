<?php

use Discord\Discord;
use Discord\Parts\Channel\Message;

new App\Listener([
    'listener' => 'message',
    'run' => function(Message $message, Discord $client) {

        $content = strtolower($message->content);

        if($content == 'ping') {
            $message->channel->sendMessage('Pong ! 🏓');
        }
    },
]);