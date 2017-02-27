<?php
$userId = "415319247";
$message = "Привет,%20красавчик";
$accessToken = "938b30602403fc503d7a470c01d4951b5c621ba3387918946f7b305ccc7d2f35dcba5377cdfe151b7c82d";

$url = "https://api.vk.com/method/messages.send?user_id=$userId&message=$message&v=5.37&access_token=$accessToken";

file_get_contents($url);
