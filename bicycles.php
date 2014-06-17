<?php

function bike_strrev($string) {
    for ($i = bike_strlen($string) - 1; $i >= 0; $i--) {
        $newString .= $string[$i];
    }
    return $newString;
}

function bike_strlen($string) {
    for ($i = 0;; $i++) {
        if (!isset($string[$i])) {
            break;
        }
    }
    return $i;
}

function bike_str_repeat($string, $int) {
    for ($i = 0; $i < $int; $i++) {
        $newString .= $string;
    }
    return $newString;
}

function bike_array_values(array $array) {
    $newArray = array();
    foreach ($array as $value) {
        $newArray[] = $value;
    }
    return $newArray;
}

function bike_array_flip(array $array) {
    $newArray = array();
    foreach ($array as $key => $value) {
        $newArray[$value] = $key;
    }
    return $newArray;
}

function bike_array_key_exists($keySearch, array $array) {

    foreach ($array as $key => $value) {
        if ($keySearch === $key) {
            $result = 1;
            break;
        } else {
            $result = 0;
        }
    }
    return $result;
}

print_r(bike_array_key_exists("xxx", array("xx" => "yy", "zz" => "uu")));


echo bike_str_repeat('ttt555', 3);

