<?php

    $connection = mysqli_connect('localhost','iotayapt_robo','shaki@robo','iotayapt_robotech');


    $teamName = $_GET['teamName'];
    $InstituteName = $_GET['InstituteName'];
    $segment = $_GET['segment'];

    $TLName = $_GET['TLName'];
    $TLEmail = $_GET['TLEmail'];
    $TLPhone = $_GET['TLPhone'];

    $M2Email = $_GET['M2Email'];
    $M2Phone = $_GET['M2Phone'];
    $M2Name =  $_GET['M2Name'];

    $M3Name =  $_GET['M3Name'];
    $M3Email = $_GET['M3Email'];
    $M3Phone = $_GET['M3Phone'];

    $M4Name =  $_GET['M4Name'];
    $M4Email = $_GET['M4Email'];
    $M4Phone = $_GET['M4Phone'];
    
    echo $teamName.$InstituteName.$segment.'<br>';
    echo $TLName.$TLEmail.$TLPhone.'<br>';
    echo $M2Email.$M2Email.$M2Email.'<br>';
    echo $M3Email.$M3Email.$M3Email.'<br>';
    echo $M4Email.$M4Email.$M4Email.'<br>';

    $query = "INSERT INTO `NRP`(`teamName`, `InstituteName`, `segment`, `TLName`, `TLEmail`, `TLPhone`, `M2Name`, `M2Email`, `M2Phone`, `M3Name`, `M3Email`, `M3Phone`, `M4Name`, `M4Email`, `M4Phone`) VALUES ('$teamName','$InstituteName','$segment','$TLName','$TLEmail','$TLPhone','$M2Name','$M2Email','$M2Phone','$M3Name','$M3Email','$M3Phone','$M4Name','$M4Email','$M4Phone')";
    $saved = mysqli_query($connection,$query);
    if($saved){
        echo 'Done';
    }

?>