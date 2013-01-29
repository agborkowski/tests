<?php
// @score 73/100
// @site http://blog.aeonmedia.eu
function falling_disks ( $A,$B ) {
  $stopA = count($A);
  $stopB = count($B);
  $maxSize = 0;
  $passDisk = 0;

  for($i=0; $i < $stopB; $i++) {
    if($stopA>0 && $B[$i] <= $maxSize) {
      $passDisk++;
      $stopA--;
      continue;
    }

    for($j=0; $j<$stopA; $j++) {
      if($j==0 && $B[$i]>$A[$j]){
        return $passDisk;
      }

      if($j==$stopA-1 || $B[$i] > $A[$j+1]) {
        $maxSize = $B[$i];
        $passDisk++;
        $stopA = $j;
      }
    }
  }
  return $passDisk;
}
?>