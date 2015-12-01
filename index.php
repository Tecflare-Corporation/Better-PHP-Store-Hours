<?php
require("init.php");
$new_clock = new betterstorehr;
$new_clock->register_time_start(1,1,1,1,1,3,3);
$new_clock->register_time_end(5,12,5,5,5,5,5);
$new_clock->add_special_day("Christmas","5","10");
$new_clock->add_special_day("Thanksgiving","1","4");
if($new_clock->check_store()) {
    echo "Store is Open because today is ";
} else {
    echo "Store is Closed because today is ";
}
foreach ($new_clock->get_todays_events() as $event)
{
    echo $event;
}
echo " and the time is " .$new_clock->get_todays_clock() . ".";
?>