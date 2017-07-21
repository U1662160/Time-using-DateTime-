<?php
//set date 
$date = date('d-m-Y');
//create start date using dateTime class
$time = new datetime();
$time::createFromFormat('d-m-Y',$date);
echo "Start Date: ". $time->format('d-m-Y');

//create $enddate using copy ogf $time
$endDate = clone $time;
$endDate->add(new dateinterval('P2Y2M1D'));
echo "<br/>Offer Ends on Date : ". $endDate->format('d-m-Y');

//show the difference 
$differ = $endDate->diff($time);
$differ = $differ->format('%d days %m months %y years');
echo "<br/>Offer Ends after : ".$differ;

/* results
Start Date: 21-07-2017
Offer Ends on Date : 22-09-2019
Offer Ends after : 1 days 2 months 2 years
By Romany
*/
echo "<hr/>";
$user = ['Romany','rooma@romany.com',new datetime('27 April 1975')];
list($name,$Email,$dob)=$user;
echo $Email;
echo $dob->format('d.m.Y');

?>
