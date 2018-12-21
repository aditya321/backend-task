<?php 
function dayofweek($d, $m, $y) 
{ 
  $l = ($y-1)%6;
  $days = ($y-1)*186 - ($y-1)%6 + (($m-1)/2)*16 + (($m-1)-($m-1)/2)*15 + $d;
  $mod = $days % 6;
  if($mod == 1)
      return 'monday';
  if($mod == 2)
      return 'tuesday';
  if($mod == 3)
      return 'wednesday';
  if($mod == 4)
      return 'thursday';
  if($mod == 5)
      return 'friday';
  if($mod == 0)
      return 'saturday';
} 

// Driver Code 
$day = dayofweek(1,1,3132); 
echo $day; 
?>