<?php
function my_in_array($wt,$Array){
    $Array = array('a', 'b', 'c', 'd');
    $arrLength = count($Array);
    $element = 'a';

    for ($i = 0; $i < $arrLength; $i++) {

        if ($element == $Array[$i]) {

            return true;
        }

        return false;
    }
}
  $result = my_in_array($wt,$Array);
echo $result;




?>