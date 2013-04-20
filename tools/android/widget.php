<?php
$data = array(
    "title" => "Aqua",
    "type"  => "list",
    "date"  => date("H:i:s"),
    "data"  => array(
            1 => array("name"=>"Temp", "value"=>"25", "color"=>"red"),
            2 => array("name"=>"Light", "value"=>"On", "color"=>"blue"),
            3 => array("name"=>"Filter", "value"=>"On", "color"=>"red"),
            4 => array("name"=>"CO2", "value"=>"On", "color"=>"green"),
            5 => array("name"=>"O2", "value"=>"On", "color"=>"green")
    )
);
echo json_encode($data);