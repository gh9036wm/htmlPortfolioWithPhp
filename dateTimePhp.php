
<?php
// for function
//echo date('l,F j ,Y') .'<br>';
//to find out what day of Xmas 2009
//$xmas2009 = strtotime ('Dec 25,2009');
//echo date('l,F j ,Y', $xmas2009).'<br>';

//for object
$date1 = new DateTime();

$date2 = new DateTime();

$west_coast = new DateTimeZone('America/Los_Angeles');

$date2->setTimezone($west_coast);

echo $date1->format('g:ia, l, F j, Y') . '<br>';
echo $date2->format('g:ia, l, F j, Y') . '<br>';