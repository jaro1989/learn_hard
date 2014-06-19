<?php

/**
 * Функция, разворачиващая строку
 * @param $string string
 * @return $newString string
 */
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

/*
 * strpbrk — Ищет в строке любой символ из заданного набора
  join — Псевдоним implode
  str_shuffle — Переставляет символы в строке случайным образом

  extract — Импортирует переменные из массива в текущую таблицу символов
  range — Создает массив, содержащий диапазон элементов
  arsort — Сортирует массив в обратном порядке, сохраняя ключи
 * 
 * 
 * 
 * 
 * 
 */

function bike_strpbrk($haystack, $needle) {
    $counter = bike_strlen($haystack);
    for ($i = 0; $i <= bike_strlen($needle); $i++) {
        for ($j = 0; $j <= bike_strlen($haystack); $j++) {
            if ($needle[$i] == $haystack[$j]) {

                if ($counter > $j) {
                    $counter = $j;
                    break;
                }
            }
        }
    }
    for ($j = $counter; $j <= bike_strlen($haystack); $j++) {
        $newString1 .= $haystack[$j];
    }

    return $newString1;
}

function bike_count(array $array){
    $i=0;
    foreach ($array as  $value) {
        $i++;        
    }
    return $i;
}
echo bike_count(array('0','3','6','2'));

function bike_join($separator, array $array) {
    
    $counter = bike_count($array);
    for ($i = 0; $i < $counter; $i++) {
        if ($i == $counter - 1) {
            $result .= $array[$i];
        } else {
            $result .= $array[$i].$separator;
        }
       
    }
     return $result;
}

function bike_str_shuffle($string){
    $counter = bike_strlen($string);
    for($i=0; $i<=$counter;$i++){
        
    }
    
}
function bike_range($start,$finish){
    for($i=$start; $i <= $finish; $i++){
        $newArray[] = $i;
    }
    return $newArray;
}

    
    

    
