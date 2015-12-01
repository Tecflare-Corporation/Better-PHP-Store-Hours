<?php
require("init.php");
$new_clock = new betterstorehr;
$new_clock->getmytimezone();
$new_clock->register_time_start(1,6,1,1,1,3,3);
$new_clock->register_time_end(5,12,5,5,5,5,5);
$new_clock->add_special_day("Christmas","closed","1","3");
if($new_clock->check_store()) {
    echo "Store is Open";
} else {
    echo "Store is Closed";
}
?>