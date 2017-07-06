<?php
//subset function

function subset($string, $percentageValue)
{
  $lengthOfString = strlen($string);
  if($percentageValue > 100){
    $percentageValue = 100;
  }
  $exactlengthOfPercentValue = (($percentageValue/100) * $lengthOfString);
  $subsetOfString = substr($string, 0, $exactlengthOfPercentValue);
  echo $subsetOfString;
}

?>
