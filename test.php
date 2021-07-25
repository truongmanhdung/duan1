<?php 

      $a = strtotime("2021-08-15");
      $b = strtotime("2021-08-19");
      $c = $b-$a;
      $k=$c/86400;
      $datelocal = array();
    for ($i = 0; $i <= $k; $i++){
      $date = $a + $i*86400;
      $datelocal[] = date("Y-m-d",$a + $i*86400);
      $datelocal.array_push($datelocal[]);
    }
    echo $datelocal;
?>

