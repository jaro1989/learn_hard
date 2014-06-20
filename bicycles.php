<?php

/**
 * Переворачивает строку задом наперед
 * @param string $string  Переворачиваемая строка.
 * @return string $newString Возвращает перевернутую строку.
 */
function bike_strrev($string) {
    for ($i = bike_strlen($string) - 1; $i >= 0; $i--) {
        $newString .= $string[$i];
    }
    return $newString;
}

/**
 * Возвращает длину строки
 * @param string $string Срока
 * @return int $i Кол-во элементов в строке
 */
function bike_strlen($string) {
    for ($i = 0;; $i++) {
        if (!isset($string[$i])) {
            break;
        }
    }
    return $i;
}

/**
 * Повторяет строку int колличество раз
 * @param string $string Входная строка
 * @param int $int Кол-во раз повторения
 * @return mixed Длина строки string в случае успеха, и 0, если string пуста.
 */
function bike_str_repeat($string, $int) {
    for ($i = 0; $i < $int; $i++) {
        $newString .= $string;
    }
    if ($string == '') {
        $newString = 0;
    }
    return $newString;
}

/**
 * Выбирает все значения массива
 * @param array $array Принимает массив
 * @return array $newArray Возвращает индексированный массив значений.
 */
function bike_array_values(array $array) {
    $newArray = array();
    foreach ($array as $value) {
        $newArray[] = $value;
    }
    return $newArray;
}

/**
 * Меняет местами ключи с их значениями в массиве
 * @param array $array Массив переворачиваемых пар ключ/значение.
 * @return mixed $newArray Возвращает перевернутый массив в случае успеха, или NULL в случае ошибки.
 */
function bike_array_flip(array $array) {

    foreach ($array as $key => $value) {
        $newArray[$value] = $key;
    }

    return $newArray;
}

/**
 * Проверяет, присутствует ли в массиве указанный ключ или индекс
 * @param mixed $keySearch Проверяемое значение
 * @param array  $array Массив с проверяемыми ключами
 * @return boolen $result Возвращает TRUE в случае успешного завершения или FALSE в случае возникновения ошибки.
 */
function bike_array_key_exists($keySearch, array $array) {

    foreach ($array as $key => $value) {
        if ($keySearch === $key) {
            $result = TRUE;
            break;
        } else {
            $result = FALSE;
        }
    }
    return $result;
}

/**
 * Ищет в строке любой символ из заданного набора
 * @param string $haystack Строка, в которой производится поиск
 * @param string $needle Набор символов поиска
 * @return mixed $newString Возвращает строку, начиная с найденного символа, или FALSE, если он не был найден.
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
        $newString .= $haystack[$j];
    }
    if ($newString = '') {
        return FALSE;
    } else {
        return $newString;
    }
}

/**
 * Подсчитывает количество элементов массива или что-то в объекте
 * @param array $array Массив
 * @return int $i Возвращает количество элементов
 */
function bike_count(array $array) {
    $i = 0;
    foreach ($array as $value) {
        $i++;
    }
    return $i;
}

/**
 * Объединяет элементы массива в строку
 * @param string $separator Разделитель
 * @param array $array Обрабатываемый массив
 * @return string $result Возвращает строку, содержащую строкое представление
 * всех элементов массива в указанном порядке, с разделителем между каждым элементом.
 */
function bike_join($separator, array $array) {

    $counter = bike_count($array);
    for ($i = 0; $i < $counter; $i++) {
        if ($i == $counter - 1) {
            $result .= $array[$i];
        } else {
            $result .= $array[$i] . $separator;
        }
    }
    return $result;
}

/**
 * Создает массив, содержащий диапазон элементов
 * @param mixed $start Первое значение последовательности.
 * @param mixed $finish Конечное значение, которым заканчивается последовательность.
 * @param int $step Если указан параметр step, то он будет использоваться 
 * как инкремент между элементами последовательности. 
 * step должен быть положительным числом. 
 * Если step не указан, он принимает значение по умолчанию 1.
 * @return array $newArray Возвращает массив элементов от start до end, включительно.
 */
function bike_range($start, $finish, $step = 1) {
    if (gettype($start) == 'integer' and gettype($finish) == 'integer') {
        for ($i = $start; $i <= $finish; $i+=$step) {
            $newArray[] = $i;
        }
    } elseif (gettype($start) == 'string' and gettype($finish) == 'string' and bike_strlen($start) == 1 and bike_strlen($finish) == 1 and ord($start) < ord($finish)) {
        for ($i = ord($start); $i <= ord($finish); $i+=$step) {
            $newArray[] = chr($i);
        }
    }
    elseif (gettype($start) == 'string' and gettype($finish) == 'string' and bike_strlen($start) == 1 and bike_strlen($finish) == 1 and ord($start) > ord($finish)) {
        for ($i = ord($start); $i >= ord($finish); $i=$i-$step) {
            $newArray[] = chr($i);
        }
    }
    return $newArray;
}
/**
 * Сортирует массив в обратном порядке
 * @param array $array Входной массив.
 * @return boolen
 */
function bike_rsort(array $array) {
    $size = bike_count($array) - 1;
    for ($i = $size; $i >= 0; $i--) {
        for ($j = 0; $j <= ($i - 1); $j++) {
            if ($array[$j] < $array[$j + 1]) {
                $k = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $k;
            }
        }
    }
    if(isset($array))
    {
        return TRUE;
    }
    else{
        return FALSE;
    }
}

if (!defined) {
    define("EXTR_OVERWRITE", "0");
    define("EXTR_SKIP", "1");
    define("EXTR_PREFIX_SAME", "2");
    define("EXTR_PREFIX_ALL", "3");
    define("EXTR_PREFIX_INVALID", "4");
    define("EXTR_IF_EXISTS", "5");
    define("EXTR_PREFIX_IF_EXISTS", "6");
    define("EXTR_REFS", "7");
}

/**
 * Импортирует переменные из массива в текущую таблицу символов
 * @param array $array Ассоциативный массив. 
 * Эта функция рассматривает ключи массива в качестве имен переменных,
 * а их значения - в качестве значений этих переменных.
 * Для каждой пары ключ/значение будет создана переменная в текущей таблице символов,
 * в соответствии с параметрами extract_type и prefix.
 * Вы должны использовать ассоциативный массив, использование числовых массивов не приведёт ни к каким результатам,
 * если вы не используете EXTR_PREFIX_ALL или EXTR_PREFIX_INVALID.
 * @param type $extType Параметр extract_type определяет способ трактования неправильных/числовых ключей и коллизий. 
 * @param type $prefix Обратите внимание, что prefix имеет значение,
 * только если extract_type установлен в EXTR_PREFIX_SAME, EXTR_PREFIX_ALL,
 * EXTR_PREFIX_INVALID или EXTR_PREFIX_IF_EXISTS.
 * Если в результате добавления префикса, не будет получено допустимое имя для переменной,
 * она не будет импортирована в текущую символьную таблицу.
 * @return int $i Возвращает количество переменных, успешно импортированных в текущую таблицу символов.
 */
function bike_extract(array $array, $extType = EXTR_OVERWRITE, $prefix = NULL) {
    $i = 0;
    if ($extType == 0) {
        foreach ($array as $key => $value) {
            $GLOBALS[$key] = $value;
            $i++;
        }
    }
    if ($extType == 1) {
        foreach ($array as $key => $value) {
            if (!isset($GLOBALS[$key])) {
                $GLOBALS[$key] = $value;
                $i++;
            }
        }
    }
    if ($extType == 2) {
        foreach ($array as $key => $value) {
            if (isset($GLOBALS[$key])) {
                $key = $prefix . "_" . $key;
                $GLOBALS[$key] = $value;
            } else {
                $GLOBALS[$key] = $value;
            }
            $i++;
        }
    }
    if ($extType == 3) {
        foreach ($array as $key => $value) {
            $key = $prefix . "_" . $key;
            $GLOBALS[$key] = $value;
            $i++;
        }
    }
    if ($extType == 4) {
        foreach ($array as $key => $value) {
            if (preg_match('/^\d/', "$key[0]") == 1) {
                $key = $prefix . "_" . $key;
                $GLOBALS[$key] = $value;
            }
        }
    }
    if ($extType == 5) {
        foreach ($array as $key => $value) {
            if (isset($GLOBALS[$key])) {
                $GLOBALS[$key] = $value;
                $i++;
            }
        }
    }
    if ($extType == 6) {
        foreach ($array as $key => $value) {
            if (isset($GLOBALS[$key])) {
                $key = $prefix . "_" . $key;
                $GLOBALS[$key] = $value;
                $i++;
            }
        }
    }
    if ($extType == 7) {
        foreach ($array as $key => $value) {
            $newKey = &$key;
            $GLOBALS[$newKey] = $value;
            $i++;
        }
    }
    return $i;
}

/**
 * Переставляет символы в строке случайным образом
 * @param string $string Входная строка.
 * @return string $newString Перемешанная строка
 */
function bike_str_shuffle($string) {
    for ($i = 0; $i < bike_strlen($string) - 1; $i++) {
        $stringArray[] = $string[$i];
    }
    do {
        foreach ($stringArray as $key => $value) {
            $random = rand(0, bike_strlen($string) - 1);
            $newArray[] = $stringArray[$random];
            unset($stringArray[$random]);
        }
    } while (bike_count($stringArray) !== 0);
    foreach ($newArray as $key => $value) {
        if ($value == "") {
            unset($newArray[$value]);
        } else {
            $newString .= $value;
        }
    }

    return $newString;
}
