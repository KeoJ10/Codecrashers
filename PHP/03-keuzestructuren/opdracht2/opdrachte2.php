<?php
$dayoftheweek = date("l ");
$dayofmonth = date( "jS ");
$month = date("F ");
echo $dayoftheweek . $dayofmonth . $month;

if(!($dayoftheweek == "Saturday" || $dayoftheweek == "Sunday")){
echo "Vandaag is een werkdag.";
}
else {
    echo "Het is weekend";
}

if($dayoftheweek == "Friday" && $dayofmonth == "13th"){
    echo "het is vrijdag de 13de";
}

if($dayofmonth == "31st" &&  $month == "May"){
    $img = '<img src="img/birthdaycake.jpg" alt="Birthday cake">';
    echo $img;
}

if($dayofmonth == "25th" &&  $month == "December"){
    $img = '<img src="img/christmas.jpg" alt="christmas tree" >';
    echo $img;
}
if($dayofmonth == "3rd" && $dayoftheweek == "Sunday" && $month == "May"){
    echo '<video controls autoplay width="800px">
	<source src="video/Liverpool.mp4" type="video/mp4">
    Uw browser kan dit filmpje niet afspelen.
    </video>';
}