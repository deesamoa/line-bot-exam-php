<?php



require "vendor/autoload.php";

$access_token = 'Ph492V/t1rsUZpXewv7STJSXjd9QY7llbkouVliOsMhpzbyuBmJ2B5d4OOTvrFR7P2vHGCHzDtrEf+eZOUBEjouRnMz0ytj7MyiRwWNBYZNO+r6iJsTgkf6YSgUmbRH9eL1/ABvHzmDTV6hTaf10ewdB04t89/1O/w1cDnyilFU=';

$channelSecret = '75c03f392f6e53d662d6f5a8db9e421f';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







