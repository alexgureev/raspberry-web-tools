<?php

$ip['last'] = file_get_contents('lastip');
$ip['current'] = $_SERVER['REMOTE_ADDR'];
file_put_contents('lastip', $ip['current']);

$json = json_encode($ip);

file_put_contents('remote.log', date('c')."\t".$json."\n", FILE_APPEND);

echo($json);
?>
