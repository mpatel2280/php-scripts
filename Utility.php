<?php

class Utility
{
    public function __construct() {
    }
    
    public function strRev(string $str) {
        $strLen = strlen($str);
        //echo "\n".  $strLen . "== " . $str . "\n";
        if ($strLen === 1) return $str;
       
        $strLen --;
       
        return $this->strRev(substr($str,1, $strLen)) . substr($str, 0, 1);
    }
    
    
    
   public function arrSort($arr) {
       for($i = 0; $i < count($arr); $i++) {
            for($j = 0; $j < count($arr)-1; $j ++) {
                if($arr[$j] > $arr[$j+1]) {
                    $temp = $arr[$j+1];
                    $arr[$j+1]=$arr[$j];
                    $arr[$j]=$temp;
                }
            }
        }

    return $arr;
   }
}

$objRev = new Utility();

$strRev = $objRev->strRev('TestinG');
print $strRev;

$arr = [1,4,5,2,3,8,9,23,12];
$arrSort = $objRev->arrSort($arr);
print_r($arrSort);

?>