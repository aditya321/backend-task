<?php 
function dayofweek($d, $m, $y) 
{ 
  $days = ($y-1)*186 - floor(($y-1)/6) + floor(($m-1)/2)*16 + (($m-1)-floor(($m-1)/2))*15 + $d; // calculating total number of days till the date
  $mod = $days % 5;   //taking modulus
      return $mod;
} 
function numberofweek($d, $m, $y, $week) 
{
  if($m%2 <> 0)        // odd month have 15 days therefore they will always have 3 week day for any week day
    { return 3;
    } 
    else {
      if($y%6 == 0 && $m == 12){    //to check if month is december of the leap year than it will contain 3 number of week days 
        return 3;
      }
      $days = ($y-1)*186 - floor(($y-1)/6) + floor(($m-1)/2)*16 + (($m-1)-floor(($m-1)/2))*15 + 1;  // for even month only those week day wil occur 4 times if month starts from same week day i.e monday will occur 4 times on even month if that month strts with monday since even month has 16 days
      
      $mod = $days % 5;
      if ($week[$mod] == $d) {
        return 4;
      }
      else{
        return 3;
      }
    }
      
} 

$dayKnown = (3131*186 - floor(3131/6) + 1)%5;   // since we know that 1 day of year 3131 is tuesday, it means that when there is remainder 1 day is tuesday same will follow for others

$week = array("0" => "Monday", "1" => "Tuesday", "2" => "Thursday", "3" => "Friday", "4" => "Saturday");

$day = dayofweek(1,1,3132);  //function to calculate the day of the date

echo "the day of the week is $week[$day]"; echo"\n";

$day = numberofweek("Tuesday",1,3132,$week);  // function to calculate the occurence of day in the particular month and in particular year

echo "Total occurence is $day times";

/* Note that every leap year will have 185 days which is divisible by 5, it means that every leap year will have same number of week days therefore 3 problem not possible*/
?>