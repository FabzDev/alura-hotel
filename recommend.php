<?php

function recommend($condition = '', $question = ''){
  $weather = array("Bogota"=>"cold", "Cartagena"=>"hot", "Medellin"=>"mild" );
  $turism = array("Guajira"=>"desert", "Atlantico"=>"beach", "Cocora"=>"plains");
  $location = array("Barranquilla"=>"north", "Leticia"=>"south", "Medellin"=>"central");


switch ($condition) {
  case "weather":
    echo array_search($question, $weather);
  break;
  case "turism":
    echo array_search($question, $turism);
  break;
  case "location":
    echo array_search($question, $location);
  break;
  default:
    echo "Welcome to the jungle";
}

  
}


recommend("location", "south");
