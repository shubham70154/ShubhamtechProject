<?php
// Your code here!
function processStrings($str1, $str2) {
   $string = "";
    for ($i=0; $i< strlen($str1);$i++){
        for ($j=0; $j < strlen($str2);$j++){
            if($str1[$i] == $str2[$j]){
                $string .= $str1[$i];
            }
        }
    }

    for($i=0; $i < strlen($string);$i++ ){
        $removeString = $string[$i]."";
        $str1= str_replace($removeString,"",$str1);
        $str2= str_replace($removeString,"",$str2);
    }

    echo "OP1:- ". $str1. " OP2:- ". $str2;

}
processStrings ("BC", "BANGALORE");

?>
