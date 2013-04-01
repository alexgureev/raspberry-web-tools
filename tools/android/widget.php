<?php
$data = array(
    "title" => "Aqua",
    "type"  => "list",
    "date"  => date("H:i:s"),
    "data"  => array(
            1 => array("name"=>"Temp", "value"=>"25"),
            2 => array("name"=>"Light", "value"=>"On"),
            3 => array("name"=>"Filter", "value"=>"On"),
            4 => array("name"=>"CO2", "value"=>"On"),
            5 => array("name"=>"O2", "value"=>"On")
    )
);
echo json_encode($data);