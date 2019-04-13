<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ( !empty($_POST['sheet']) )
{
    $count = count( $_POST['time'] );
    $mm = 0;
    for ( $i = 0; $i < $count; $i = $i+2 )
    {
        $strStart = $_POST['time'][$i]; 
        $strEnd   = $_POST['time'][$i+1]; 
        $dteStart = new DateTime($strStart); 
        $dteEnd   = new DateTime($strEnd); 
        $dteDiff  = $dteStart->diff($dteEnd);
        $hours = $dteDiff->h.':'.$dteDiff->i;
        $t = explode(":", $hours); 
        $h = $t[0]; 
        IF (ISSET($t[1])) { 
            $m = $t[1]; 
        } ELSE { 
            $m = "00"; 
        } 
        $mm +=  ( ($h * 60) +  $m ); 
    }
    $remiander = 2500%60;
    $hour = ( 2500 - $remiander ) / 60;
    echo $hour.':'.$remiander;
}
?>

<form method="POST">
    From: <input type="text" name="time[]">
    To: <input type="text" name="time[]">
    From: <input type="text" name="time[]">
    To: <input type="text" name="time[]"><br>
    From: <input type="text" name="time[]">
    To: <input type="text" name="time[]">
    From: <input type="text" name="time[]">
    To: <input type="text" name="time[]"><br>
    From: <input type="text" name="time[]">
    To: <input type="text" name="time[]">
    From: <input type="text" name="time[]">
    To: <input type="text" name="time[]"><br>
    From: <input type="text" name="time[]">
    To: <input type="text" name="time[]">
    From: <input type="text" name="time[]">
    To: <input type="text" name="time[]"><br>
    From: <input type="text" name="time[]">
    To: <input type="text" name="time[]">
    From: <input type="text" name="time[]">
    To: <input type="text" name="time[]"><br>

    <input type="submit" name="sheet">
</form>
