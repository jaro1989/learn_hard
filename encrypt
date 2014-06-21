<?php
/**
*Дешифратор XOR
*@param string $sourceFile - входной файл
*@param string $outputFile - выходной файл
*@return bool
*/
function xor_decode($sourceFile, $outputFile) {
	if (file_exists($sourceFile)) {
		$string = file_get_contents($sourceFile);
		$array = str_split($string);
                $statisticArray = array_count_values($array);
                arsort($statisticArray);
                $keyArray = array_keys($statisticArray);
                $mostMeeted = $keyArray[0];
                $key = ord($mostMeeted)^ord(" ");
                
                for ($i = 0; $i < strlen($string); $i++) {
                $outputArray[] .= chr(ord($string[$i]) ^ $key); 
                }
                
                
        

		file_put_contents($outputFile, implode($outputArray));
		return $key;
	} else {
		return $mostMeeted;
	}
}


print_r(xor_decode('encrypted.txt','text.txt'));
