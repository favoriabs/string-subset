<?php
//subset function

function subset(string $string, float $percentageValue)
{
  $lengthOfString = strlen($string);
  $exactlengthOfPercentValue = (($percentageValue/100) * $lengthOfString);
  $subsetOfString = substr($string, 0, $exactlengthOfPercentValue);
  echo $subsetOfString;
}

?>
