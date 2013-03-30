<?php
$data = array(
    "title" => "Universal widget",
    "type"  => "list",
    "date"  => date("d.m.y H:i:s"),
    "data"  => array(
            1 => array("name"=>"Row one", "value"=>"String"),
            2 => array("name"=>"Row two", "value"=>"1200"),
            3 => array("name"=>"Row three", "value"=>"50%"),
            4 => array("name"=>"Row 4", "value"=>"1`230,00$"),
            5 => array("name"=>"Row 5", "value"=>"19403"),
            6 => array("name"=>"Row 6", "value"=>"l322"),
            7 => array("name"=>"Row 7", "value"=>"l322"),
            8 => array("name"=>"Row 8", "value"=>"l322"),
            9 => array("name"=>"Row 9", "value"=>"l322"),
            10 => array("name"=>"Row 10", "value"=>"l322"),
    )
);
echo json_encode($data);