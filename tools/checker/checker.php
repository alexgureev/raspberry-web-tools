<?php
include 'config.php';
// Проверяем смену IP
$result = file_get_contents('');
$array = json_decode($result, true);

if(sizeof($array)==2)
{
    if($array['last']!=$array['current'])
    {
        $changed = 1;
        $newIP = $array['current'];
        file_put_contents('local.log', date('c')."\t new IP ".$newIP.".\n", FILE_APPEND);
    }
    else
    {
        $changed = 0;
    }
}
else
{
    // Проверяем наличие интернета
    $internet = file_get_contents('http://yandex.ru');

    if ($internet === false)
    {
        file_put_contents('local.log', date('c')."\t Internet connection down.\n", FILE_APPEND);
    }
    else
    {
        file_put_contents('local.log', date('c')."\t HC server is down.\n", FILE_APPEND);
    }
}

// Меняем DNS-запись
if($changed==1&&$newIP!=0)
{
    $res = file_get_contents('https://api.reg.ru/api/regru2/zone/update_records?input_format=json&input_data={"username":"' . $config['user'] . '","password":"' . $config['pass'] . '","domain_name":"' . $config['domain'] . '","action_list":[{"action":"remove_record","subdomain":"ra","record_type":"A"},{"action":"add_alias","subdomain":"ra","ipaddr":"'.$newIP.'"}]}');

    $res = json_decode($res, true);

    if($res['result']=="success")
    {
        file_put_contents('local.log', date('c')."\t DNS record changed.\n", FILE_APPEND);
    }
    else
    {
        file_put_contents('local.log', date('c')."\t DNS record change failed.\n", FILE_APPEND);
    }
}
else
{
    file_put_contents('local.log', date('c')."\t Nothing to do.\n", FILE_APPEND);
}
?>
