<?php
/*
This is very important and it is all of the functions that makes this system work.
*/
session_start();
error_reporting(E_ALL);

class betterstorehr {
    //register all the values
    public $mon;
    public $tue;
    public $wed;
    public $thu;
    public $fri;
    public $sat;
    public $sun;
    public $mon_e;
    public $tue_e;
    public $wed_e;
    public $thu_e;
    public $fri_e;
    public $sat_e;
    public $sun_e;
    public $n = 0;
    public $arr_spe_reason = array();
    public $arr_spe_start = array();
    public $arr_spe_end = array();
    public $cause = array();
    function register_time_start($mon_r,$tue_r,$wed_r,$thu_r,$fri_r,$sat_r,$sun_r)
    {
       $this->mon = $mon_r;
       $this->tue = $tue_r;
       $this->wed = $wed_r;
       $this->thu = $thu_r;
       $this->fri = $fri_r;
       $this->sat = $sat_r;
       $this->wed = $sun_r;
    }
        function register_time_end($mon_r,$tue_r,$wed_r,$thu_r,$fri_r,$sat_r,$sun_r)
    {
       $this->mon_e = $mon_r;
       $this->tue_e = $tue_r;
       $this->wed_e = $wed_r;
       $this->thu_e = $thu_r;
       $this->fri_e = $fri_r;
       $this->sat_e = $sat_r;
       $this->wed_e = $sun_r;
    }
    function add_special_day($reason,$end,$start) {
        $this->arr_spe_reason[$this->n] = $reason;
        $this->arr_spe_start[$this->n] = $start;
        $this->arr_spe_end[$this->n] = $end;
        $this->n += 1;
    }
    function check_store() {

  $date = strtotime(date('Y-m-d'));
  $date = date("l", $date);
  $date = strtolower($date);
  if($date == "monday") {
      $day = $this->mon;
      $endday = $this->mon_e;
      
  }
  if($date == "tuesday") {
      $day = $this->tue;
      $endday = $this->tue_e;
      
  }
  if($date == "wednesday") {
      $day = $this->wed;
      $endday = $this->wed_e;
      
  }
  if($date == "thursday") {
      $day = $this->thu;
      $endday = $this->thu_e;
      
  }
  if($date == "friday") {
      $day = $this->fri;
      $endday = $this->fri_e;
      
  }
    if($date == "saturday") {
      $day = $this->sat;
      $endday = $this->sat_e;
      
  }
  if($date == "sunday") {
      $day = $this->sun;
      $endday = $this->sun_e;
      
  }
  
  $today = date("g", strtotime("13:30"));
  $range = range($day, $endday);
  $y = 0;
  $c = 0;
  foreach ($this->arr_spe_start as $itwo)
  {
         $currentc = $c;
      $ione = $this->arr_spe_end[$c];
      $c +=1;
     $my = $today;
      $rangea_A = range($ione,$itwo);
if (in_array($today,$rangea_A))
{
    $y +=1;
    $this->cause[$currentc] = $this->arr_spe_reason[$currentc];
}
      }
  if(in_array($today, $range) && $y == 0){
      return true;
  } else {
      return false;
  }
}
function get_todays_events() {
    return $this->cause;
}
}


?>