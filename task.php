<?php 
function dayofweek($d, $m, $y) 
{ 
  $days = ($y-1)*186 - floor(($y-1)/6) + floor(($m-1)/2)*16 + (($m-1)-floor(($m-1)/2))*15 + $d;
  $mod = $days % 5;
      return $mod;
} 
function numberofweek($d, $m, $y, $week) 
{
  if($m%2 <> 0)
    { return 3;
    } 
    else {
      $days = ($y-1)*186 - floor(($y-1)/6) + floor(($m-1)/2)*16 + (($m-1)-floor(($m-1)/2))*15 + 1;
      $mod = $days % 5;
      if ($week[$mod] == $d) {
        return 4;
      }
      else{
        return 3;
      }
    }
      
} 
$dayKnown = 3131*186 - (3131%6) + 1;
$week = array("0" => "Monday", "1" => "Tuesday", "2" => "Thursday", "3" => "Friday", "4" => "Saturday");
$day = dayofweek(1,1,3132); 
echo $week[$day]; 

$day = numberofweek("Tuesday",1,3132,$week); 
echo $day;
?>