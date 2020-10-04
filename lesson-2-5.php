<?php
function myRecursion($x, $n) {
  if ($n == 0) {
    return 1;
  }
  if ($n < 0) {
    return myRecursion(1/$x, -$n);
  }
  return $x * myRecursion($x, $n-1);
}

echo myRecursion(6, 8)
?>