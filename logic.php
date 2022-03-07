<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="logic.css">
    <title>logic</title>
</head>
<body>
<div class="container">
<!-- $i= ke samping $j= kebawah -->

<div class="atas">
    <!-- 1,1 -->
    <table border="1" cellpadding="10" cellspacing="0">

<?php
 for ( $i=1; $i <=9; $i++ ) {
     echo "<tr>";

     for ( $j=1; $j <= 9; $j++) {
         echo "<td> * </td>";
     }
     echo "</tr>";
 }
?>
</table>

        <!-- <hr> -->


    <!-- 1,2 -->
    <table border="1" cellpadding="10" cellspacing="0">

<?php
 for ( $i=1; $i <=9; $i++ ) {
     echo "<tr>";

     for ( $j=1; $j <= 9; $j++ ) {

         if ( $i % 9 == 1) {
             echo "<td> * </td>";
         }

         else{
           echo "<td> - </td>";
         }
     }
     echo "</tr>";
 }
?>

</table>

<!-- <hr> -->

<!-- 1,3 -->

<table border="1" cellpadding="11" cellspacing="0">

<?php
 for ( $i=1; $i <=9; $i++ ) {
     echo "<tr>";

     for ( $j=1; $j <= 9; $j++ ) {

         if ( $j % 9 == 1) {
             echo "<td> * </td>";
         }

         else{
           echo "<td> - </td>";
         }
     }
     echo "</tr>";
 }
?>

</table>
</div>

<!-- <hr> -->


<div class="bawah">
<!-- 1,4 -->

<table border="1" cellpadding="10" cellspacing="0">

<?php
 for ( $i=1; $i <=9; $i++ ) {
     echo "<tr>";

     for ( $j=1; $j <= 9; $j++ ) {

         if ($i == 1) {
             echo "<td> * </td>";
         }
         elseif ($j == 9) {
            echo "<td> * </td>";
         }

         elseif ( $i % 10 == 1) {
             echo "<td> * </td>";
         }

         else{
           echo "<td> - </td>";
         }
     }
     echo "</tr>";
 }
?>

</table>

<!-- <hr> -->


<!-- 1,5 -->

<table border="1" cellpadding="10" cellspacing="0">

<?php
 for ( $i=1; $i <=9; $i++ ) {
     echo "<tr>";

     for ( $j=1; $j <= 9; $j++ ) {

         if ($i == 1) {
             echo "<td> * </td>";
         }
         elseif ($j == 1) {
            echo "<td> * </td>";
         }

         elseif ( $i % 10 == 1) {
             echo "<td> * </td>";
         }

         else{
           echo "<td> - </td>";
         }
     }
     echo "</tr>";
 }
?>
</table>

<!-- <hr> -->

<!-- 1,6 -->

<table border="1" cellpadding="10" cellspacing="0">

<?php
 for ( $i=1; $i <=9; $i++ ) {
     echo "<tr>";

     for ( $j=1; $j <= 9; $j++ ) {

         if ($i == 1) {
             echo "<td> * </td>";
         }

        elseif ($i == 9) {
            echo "<td> * </td>";
        }

        elseif ($i == 5) {
            echo "<td> * </td>";
        }

         elseif ($j == 1) {
            echo "<td> * </td>";
         }

         elseif ($j == 9) {
            echo "<td> * </td>";
         }

         elseif ($j == 5) {
            echo "<td> * </td>";
         }

         elseif ( $i % 10 == 1) {
             echo "<td> * </td>";
         }

         else{
           echo "<td> - </td>";
         }
     }
     echo "</tr>";
 }
?>
</div>

</div>



    
</body>
</html>     