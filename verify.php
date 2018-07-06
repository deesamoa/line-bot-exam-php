<?php
$access_token = '+Rg5aHVZhmNZRAOQZbHaNQge7gYIRSoMv9SHeqwDdD5JeKEuASsTsgUyi4Ogk/tTP2vHGCHzDtrEf+eZOUBEjouRnMz0ytj7MyiRwWNBYZOgWohHoGGcBubBDAaOIQL387EvTaW0lOWFNUz2TIQGnQdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
