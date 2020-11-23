<?php
    if($_POST['group1'] == 2 || !isset($_POST['group2']))
    {
        $summadd=0;
    }
    else
    {
        $summadd = $_POST['summadd'];
    }
    $timestamp = strtotime($_POST['date']); 
    $month=date('m',$timestamp);
    $year=date('Y',$timestamp);
    $daysn= 28+($month+$month/8)%2+2%$month+1/($month*2);
    if($year%4==0)
    {
        $daysy = 366;
    }
    else
    {
        $daysy = 365;
    }
    $summn1 = $_POST['summn-1'];
    $summn=$summn1+($summn1+$summadd)*$daysn(10/$daysy);
    return $summn;
?>