<?php

function recommend($condition = '', $question = ''){
  $weather = array("Bogota"=>"cold", "Cartagena"=>"hot", "Medellin"=>"mild" );
  $turism = array("Guajira"=>"desert", "Atlantico"=>"beach", "Cocora"=>"plains");
  $location = array("Barranquilla"=>"north", "Leticia"=>"south", "Medellin"=>"central");


switch ($condition) {
  case "weather":
    $array=$weather;
  break;
  case "turism":
    $array=$turism;
  break;
  case "location":
    $array=$location;
  break;
  default:
    echo "Welcome to the jungle";
}
echo "A great place for you is ".array_search($question, $array);
}


recommend("location", "north");
