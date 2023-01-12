<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <title>Практика 11.7</title>
  </head>

  <body>
    <h1>Таблица истинности</h1>
<?php
$a = 0; 
$b = 1;
$c = 1;//true
$d = 0;//false
?>
    <div class="truth" style="text-align: center;">
<table id="truth">
    <tr>
      <th>A</th>
      <th>B</th>
      <th>!A</th>
      <th>A || B</th>
      <th>A && B</th>
      <th>A xor B</th>
      </tr>
    <tr>
<?php
  echo '<td class="one">'.$a.'</td>';
  echo '<td class="two">'.$a.'</td>';
  $a1 = $a;
  $b1 = $a;
  $res1 = !$a1;
  if($res1 == false){$res1 = $d; } else {$res1 = $c;}
  echo '<td>'.$res1.'</td>';
  $res2 =$a1 || $b1;
  if($res2 == false){$res2 = $d; } else {$res2 = $c;}
  echo '<td>'.$res2.'</td>';
  $res3 =$a1 && $b1;
  if($res3 == false){$res3 = $d; } else {$res3 = $c;}
  echo '<td>'.$res3.'</td>';
  $res4 =$a1 xor $b1;
  if($res4 == false){$res4 = $d; } else {$res4 = $c;}
  echo '<td>'.$res4.'</td>';
?>
     
     </tr>
    <tr>
<?php
  echo '<td class="one">'.$a.'</td>';
  echo '<td class="two">'.$b.'</td>';
  $a2 = $a;
  $b2 = $b;
  $res5 = !$a2;
  if($res5 == false){$res5 = $d; } else {$res5 = $c;}
  echo '<td>'.$res5.'</td>';
  $res6 = $a2 || $b2;
  if($res6 == false){$res6 = $d; } else {$res6 = $c;}
  echo '<td>'.$res6.'</td>';
  $res7 = $a2 && $b2;
  if($res7 == false){$res7 = $d; } else {$res7 = $c;}
  echo '<td>'.$res7.'</td>';
  if($a2 xor $b2 == false){$res8 = $d; } else {$res8 = $c;}
  echo '<td>'.$res8.'</td>';
?>
    </tr>
    <tr>
<?php
  echo '<td class="one">'.$b.'</td>';
  echo '<td class="two">'.$a.'</td>';
  $a3 = $b;
  $b3 = $a;
  $res9 = !$a3;
  if($res9 == false){$res9 = $d; } else {$res9 = $c;}
  echo '<td>'.$res9.'</td>';
  $res10 = $a3 || $b3;
  if($res10 == false){$res10 = $d; } else {$res10 = $c;}
  echo '<td>'.$res10.'</td>';
  $res11 = $a3 && $b3;
  if($res11 == false){$res11 = $d; } else {$res11 = $c;}
  echo '<td>'.$res11.'</td>';
  if($a3 xor $b3 == false){$res12 = $d; } else {$res12 = $c;}
  echo '<td>'.$res12.'</td>';
?>
    </tr>
    <tr>
<?php
  echo '<td class="one">'.$b.'</td>';
  echo '<td class="two">'.$b.'</td>';
  $a4 = $b;
  $b4 = $b;
  $res13 = !$a4;
  if($res13 == false){$res13 = $d; } else {$res13 = $c;} 
  echo '<td>'.$res13.'</td>';
  $res14 = $a4 || $b4;
  if($res14 == false){$res14 = $d; } else {$res14 = $c;}
  echo '<td>'.$res14.'</td>';
  $res15 = $a4 && $b4;
  if($res15  == false){$res15 = $d; } else {$res15 = $c;}
  echo '<td>'.$res15.'</td>';
  if($a4 xor $b4 == false){$res16 = $d; } else {$res16 = $c;}
  echo '<td>'.$res16.'</td>';
?>
    </tr>
    </table>
</div>
<p>1 - true; 0 - false</p>
<h3>Выводы о таблице истинности:</h3>
<p>
!А - ОТРИЦАНИЕ: возвращает true, если A не true.<br>
A && B - И: возвращает true, если и А, и В true.<br>
A || B - ИЛИ: возвращает true, если или А, или В true.<br>
A xor B	- ИСКЛЮЧАЮЩЕЕ ИЛИ: возвращает true, если А или В true, но не оба.</p>



<table cellpadding=3 cellspacing=3><tr>
<?php
$tr = "true"; 
$fl = "false";

$th1 = true;
$th2 = false;
$th3 = 1;
$th4 = 0;
$th5 = -1;
$th6 = "1";
$th7 = null;
$th8 = "php";

$td1 = true;
$td2 = false;
$td3 = 1;
$td4 = 0;
$td5 = -1;
$td6 = "1";
$td7 = null;
$td8 = "php";
?>
<td>
<h1>Гибкое сравнение в PHP</h1>
<div class="flexible">
<table id="flexible">
    <tr>
      <th></th>
      <th>true</th>
      <th>false</th>
      <th>1</th>
      <th>0</th>
      <th>-1</th>
      <th>"1"</th>
      <th>null</th>
      <th>"php"</th>
      </tr>
     <tr>
      <td class="one">true</td>
<?php
  if($th1 == $td1){$comp1_1 = $tr; } else {$comp1_1 = $fl;} 
  echo '<td>'.$comp1_1.'</td>';
?>
<?php
  if($th2 == $td1){$comp1_2 = $tr; } else {$comp1_2 = $fl;} 
  echo '<td>'.$comp1_2.'</td>';
?>
<?php
  if($th3 == $td1){$comp1_3 = $tr; } else {$comp1_3 = $fl;} 
  echo '<td>'.$comp1_3.'</td>';
?>
 <?php
  if($th4 == $td1){$comp1_4 = $tr; } else {$comp1_4 = $fl;} 
  echo '<td>'.$comp1_4.'</td>';
?>
<?php
  if($th5 == $td1){$comp1_5 = $tr; } else {$comp1_5 = $fl;} 
  echo '<td>'.$comp1_5.'</td>';
?>
<?php
  if($th6 == $td1){$comp1_6 = $tr; } else {$comp1_6 = $fl;} 
  echo '<td>'.$comp1_6.'</td>';
?>
<?php
  if($th7 == $td1){$comp1_7 = $tr; } else {$comp1_7 = $fl;} 
  echo '<td>'.$comp1_7.'</td>';
?>
<?php
  if($th8 == $td1){$comp1_8 = $tr; } else {$comp1_8 = $fl;} 
  echo '<td>'.$comp1_8.'</td>';
?>
     </tr>
    <tr>
    <td class="one">false</td>
<?php
  if($th1 == $td2){$comp2_1 = $tr; } else {$comp2_1 = $fl;} 
  echo '<td>'.$comp2_1.'</td>';
?>
<?php
  if($th2 == $td2){$comp2_2 = $tr; } else {$comp2_2 = $fl;} 
  echo '<td>'.$comp2_2.'</td>';
?>
<?php
  if($th3 == $td2){$comp2_3 = $tr; } else {$comp2_3 = $fl;} 
  echo '<td>'.$comp2_3.'</td>';
?>
 <?php
  if($th4 == $td2){$comp2_4 = $tr; } else {$comp2_4 = $fl;} 
  echo '<td>'.$comp2_4.'</td>';
?>
<?php
  if($th5 == $td2){$comp2_5 = $tr; } else {$comp2_5 = $fl;} 
  echo '<td>'.$comp2_5.'</td>';
?>
<?php
  if($th6 == $td2){$comp2_6 = $tr; } else {$comp2_6 = $fl;} 
  echo '<td>'.$comp2_6.'</td>';
?>
<?php
  if($th7 == $td2){$comp2_7 = $tr; } else {$comp2_7 = $fl;} 
  echo '<td>'.$comp2_7.'</td>';
?>
<?php
  if($th8 == $td2){$comp2_8 = $tr; } else {$comp2_8 = $fl;} 
  echo '<td>'.$comp2_8.'</td>';
?>
    </tr>
    <tr>
    <td class="one">1</td>
<?php
  if($th1 == $td3){$comp3_1 = $tr; } else {$comp3_1 = $fl;} 
  echo '<td>'.$comp3_1.'</td>';
?>
<?php
  if($th2 == $td3){$comp3_2 = $tr; } else {$comp3_2 = $fl;} 
  echo '<td>'.$comp3_2.'</td>';
?>
<?php
  if($th3 == $td3){$comp3_3 = $tr; } else {$comp3_3 = $fl;} 
  echo '<td>'.$comp3_3.'</td>';
?>
 <?php
  if($th4 == $td3){$comp3_4 = $tr; } else {$comp3_4 = $fl;} 
  echo '<td>'.$comp3_4.'</td>';
?>
<?php
  if($th5 == $td3){$comp3_5 = $tr; } else {$comp3_5 = $fl;} 
  echo '<td>'.$comp3_5.'</td>';
?>
<?php
  if($th6 == $td3){$comp3_6 = $tr; } else {$comp3_6 = $fl;} 
  echo '<td>'.$comp3_6.'</td>';
?>
<?php
  if($th7 == $td3){$comp3_7 = $tr; } else {$comp3_7 = $fl;} 
  echo '<td>'.$comp3_7.'</td>';
?>
<?php
  if($th8 == $td3){$comp3_8 = $tr; } else {$comp3_8 = $fl;} 
  echo '<td>'.$comp3_8.'</td>';
?>
    </tr>
    <tr>
    <td class="one">0</td>
<?php
  if($th1 == $td4){$comp4_1 = $tr; } else {$comp4_1 = $fl;} 
  echo '<td>'.$comp4_1.'</td>';
?>
<?php
  if($th2 == $td4){$comp4_2 = $tr; } else {$comp4_2 = $fl;} 
  echo '<td>'.$comp4_2.'</td>';
?>
<?php
  if($th3 == $td4){$comp4_3 = $tr; } else {$comp4_3 = $fl;} 
  echo '<td>'.$comp4_3.'</td>';
?>
 <?php
  if($th4 == $td4){$comp4_4 = $tr; } else {$comp4_4 = $fl;} 
  echo '<td>'.$comp4_4.'</td>';
?>
<?php
  if($th5 == $td4){$comp4_5 = $tr; } else {$comp4_5 = $fl;} 
  echo '<td>'.$comp4_5.'</td>';
?>
<?php
  if($th6 == $td4){$comp4_6 = $tr; } else {$comp4_6 = $fl;} 
  echo '<td>'.$comp4_6.'</td>';
?>
<?php
  if($th7 == $td4){$comp4_7 = $tr; } else {$comp4_7 = $fl;} 
  echo '<td>'.$comp4_7.'</td>';
?>
<?php
  if($th8 == $td4){$comp4_8 = $tr; } else {$comp4_8 = $fl;} 
  echo '<td>'.$comp4_8.'</td>';
?>
    </tr>
    <tr>
    <td class="one">-1</td>
<?php
  if($th1 == $td5){$comp5_1 = $tr; } else {$comp5_1 = $fl;} 
  echo '<td>'.$comp5_1.'</td>';
?>
<?php
  if($th2 == $td5){$comp5_2 = $tr; } else {$comp5_2 = $fl;} 
  echo '<td>'.$comp5_2.'</td>';
?>
<?php
  if($th3 == $td5){$comp5_3 = $tr; } else {$comp5_3 = $fl;} 
  echo '<td>'.$comp5_3.'</td>';
?>
 <?php
  if($th4 == $td5){$comp5_4 = $tr; } else {$comp5_4 = $fl;} 
  echo '<td>'.$comp5_4.'</td>';
?>
<?php
  if($th5 == $td5){$comp5_5 = $tr; } else {$comp5_5 = $fl;} 
  echo '<td>'.$comp5_5.'</td>';
?>
<?php
  if($th6 == $td5){$comp5_6 = $tr; } else {$comp5_6 = $fl;} 
  echo '<td>'.$comp5_6.'</td>';
?>
<?php
  if($th7 == $td5){$comp5_7 = $tr; } else {$comp5_7 = $fl;} 
  echo '<td>'.$comp5_7.'</td>';
?>
<?php
  if($th8 == $td5){$comp5_8 = $tr; } else {$comp5_8 = $fl;} 
  echo '<td>'.$comp5_8.'</td>';
?>
    
    </tr>
    <tr>
    <td class="one">"1"</td>
   <?php
  if($th1 == $td6){$comp6_1 = $tr; } else {$comp6_1 = $fl;} 
  echo '<td>'.$comp6_1.'</td>';
?>
<?php
  if($th2 == $td6){$comp6_2 = $tr; } else {$comp6_2 = $fl;} 
  echo '<td>'.$comp6_2.'</td>';
?>
<?php
  if($th3 == $td6){$comp6_3 = $tr; } else {$comp6_3 = $fl;} 
  echo '<td>'.$comp6_3.'</td>';
?>
 <?php
  if($th4 == $td6){$comp6_4 = $tr; } else {$comp6_4 = $fl;} 
  echo '<td>'.$comp6_4.'</td>';
?>
<?php
  if($th5 == $td6){$comp6_5 = $tr; } else {$comp6_5 = $fl;} 
  echo '<td>'.$comp6_5.'</td>';
?>
<?php
  if($th6 == $td6){$comp6_6 = $tr; } else {$comp6_6 = $fl;} 
  echo '<td>'.$comp6_6.'</td>';
?>
<?php
  if($th7 == $td6){$comp6_7 = $tr; } else {$comp6_7 = $fl;} 
  echo '<td>'.$comp6_7.'</td>';
?>
<?php
  if($th8 == $td6){$comp6_8 = $tr; } else {$comp6_8 = $fl;} 
  echo '<td>'.$comp6_8.'</td>';
?>
    </tr>
    <tr>
    <td class="one">null</td>
<?php
  if($th1 == $td7){$comp7_1 = $tr; } else {$comp7_1 = $fl;} 
  echo '<td>'.$comp7_1.'</td>';
?>
<?php
  if($th2 == $td7){$comp7_2 = $tr; } else {$comp7_2 = $fl;} 
  echo '<td>'.$comp7_2.'</td>';
?>
<?php
  if($th3 == $td7){$comp7_3 = $tr; } else {$comp7_3 = $fl;} 
  echo '<td>'.$comp7_3.'</td>';
?>
 <?php
  if($th4 == $td7){$comp7_4 = $tr; } else {$comp7_4 = $fl;} 
  echo '<td>'.$comp7_4.'</td>';
?>
<?php
  if($th5 == $td7){$comp7_5 = $tr; } else {$comp7_5 = $fl;} 
  echo '<td>'.$comp7_5.'</td>';
?>
<?php
  if($th6 == $td7){$comp7_6 = $tr; } else {$comp7_6 = $fl;} 
  echo '<td>'.$comp7_6.'</td>';
?>
<?php
  if($th7 == $td7){$comp7_7 = $tr; } else {$comp7_7 = $fl;} 
  echo '<td>'.$comp7_7.'</td>';
?>
<?php
  if($th8 == $td7){$comp7_8 = $tr; } else {$comp7_8 = $fl;} 
  echo '<td>'.$comp7_8.'</td>';
?>
    </tr>
    <tr>
    <td class="one">"php"</td>
<?php
  if($th1 == $td8){$comp8_1 = $tr; } else {$comp8_1 = $fl;} 
  echo '<td>'.$comp8_1.'</td>';
?>
<?php
  if($th2 == $td8){$comp8_2 = $tr; } else {$comp8_2 = $fl;} 
  echo '<td>'.$comp8_2.'</td>';
?>
<?php
  if($th3 == $td8){$comp8_3 = $tr; } else {$comp8_3 = $fl;} 
  echo '<td>'.$comp8_3.'</td>';
?>
 <?php
  if($th4 == $td8){$comp8_4 = $tr; } else {$comp8_4 = $fl;} 
  echo '<td>'.$comp8_4.'</td>';
?>
<?php
  if($th5 == $td8){$comp8_5 = $tr; } else {$comp8_5 = $fl;} 
  echo '<td>'.$comp8_5.'</td>';
?>
<?php
  if($th6 == $td8){$comp8_6 = $tr; } else {$comp8_6 = $fl;} 
  echo '<td>'.$comp8_6.'</td>';
?>
<?php
  if($th7 == $td8){$comp8_7 = $tr; } else {$comp8_7 = $fl;} 
  echo '<td>'.$comp8_7.'</td>';
?>
<?php
  if($th8 == $td8){$comp8_8 = $tr; } else {$comp8_8 = $fl;} 
  echo '<td>'.$comp8_8.'</td>';
?>
    </tr>
    </table>
    </div> 
</td>   

<td>
<h1>Жесткое сравнение в PHP</h1>
<div class="tough"> 
<table id="tough">
    <tr>
      <th></th>
      <th>true</th>
      <th>false</th>
      <th>1</th>
      <th>0</th>
      <th>-1</th>
      <th>"1"</th>
      <th>null</th>
      <th>"php"</th>
      </tr>
     <tr>
      <td class="one">true</td>
<?php
  if($th1 === $td1){$comp11_1 = $tr; } else {$comp11_1 = $fl;} 
  echo '<td>'.$comp11_1.'</td>';
?>
  <?php
  if($th2 === $td1){$comp11_2 = $tr; } else {$comp11_2 = $fl;} 
  echo '<td>'.$comp11_2.'</td>';
?>
 <?php
  if($th3 === $td1){$comp11_3 = $tr; } else {$comp11_3 = $fl;} 
  echo '<td>'.$comp11_3.'</td>';
?>
 <?php
  if($th4 === $td1){$comp11_4 = $tr; } else {$comp11_4 = $fl;} 
  echo '<td>'.$comp11_4.'</td>';
?>
<?php
  if($th5 === $td1){$comp11_5 = $tr; } else {$comp11_5 = $fl;} 
  echo '<td>'.$comp11_5.'</td>';
?>
<?php
  if($th6 === $td1){$comp11_6 = $tr; } else {$comp11_6 = $fl;} 
  echo '<td>'.$comp11_6.'</td>';
?>
<?php
  if($th7 === $td1){$comp11_7 = $tr; } else {$comp11_7 = $fl;} 
  echo '<td>'.$comp11_7.'</td>';
?>
<?php
  if($th8 === $td1){$comp11_8 = $tr; } else {$comp11_8 = $fl;} 
  echo '<td>'.$comp11_8.'</td>';
?>
     </tr>
    <tr>
    <td class="one">false</td>
<?php
  if($th1 === $td2){$comp12_1 = $tr; } else {$comp12_1 = $fl;} 
  echo '<td>'.$comp12_1.'</td>';
?>
<?php
  if($th2 === $td2){$comp12_2 = $tr; } else {$comp12_2 = $fl;} 
  echo '<td>'.$comp12_2.'</td>';
?>
<?php
  if($th3 === $td2){$comp12_3 = $tr; } else {$comp12_3 = $fl;} 
  echo '<td>'.$comp12_3.'</td>';
?>
 <?php
  if($th4 === $td2){$comp12_4 = $tr; } else {$comp12_4 = $fl;} 
  echo '<td>'.$comp12_4.'</td>';
?>
<?php
  if($th5 === $td2){$comp12_5 = $tr; } else {$comp12_5 = $fl;} 
  echo '<td>'.$comp12_5.'</td>';
?>
<?php
  if($th6 === $td2){$comp12_6 = $tr; } else {$comp12_6 = $fl;} 
  echo '<td>'.$comp12_6.'</td>';
?>
<?php
  if($th7 === $td2){$comp12_7 = $tr; } else {$comp12_7 = $fl;} 
  echo '<td>'.$comp12_7.'</td>';
?>
<?php
  if($th8 === $td2){$comp12_8 = $tr; } else {$comp12_8 = $fl;} 
  echo '<td>'.$comp12_8.'</td>';
?>
    </tr>
    <tr>
    <td class="one">1</td>
<?php
  if($th1 === $td3){$comp13_1 = $tr; } else {$comp13_1 = $fl;} 
  echo '<td>'.$comp13_1.'</td>';
?>
<?php
  if($th2 === $td3){$comp13_2 = $tr; } else {$comp13_2 = $fl;} 
  echo '<td>'.$comp13_2.'</td>';
?>
<?php
  if($th3 === $td3){$comp13_3 = $tr; } else {$comp13_3 = $fl;} 
  echo '<td>'.$comp13_3.'</td>';
?>
 <?php
  if($th4 === $td3){$comp13_4 = $tr; } else {$comp13_4 = $fl;} 
  echo '<td>'.$comp13_4.'</td>';
?>
<?php
  if($th5 === $td3){$comp13_5 = $tr; } else {$comp13_5 = $fl;} 
  echo '<td>'.$comp13_5.'</td>';
?>
<?php
  if($th6 === $td3){$comp13_6 = $tr; } else {$comp13_6 = $fl;} 
  echo '<td>'.$comp13_6.'</td>';
?>
<?php
  if($th7 === $td3){$comp13_7 = $tr; } else {$comp13_7 = $fl;} 
  echo '<td>'.$comp13_7.'</td>';
?>
<?php
  if($th8 === $td3){$comp13_8 = $tr; } else {$comp13_8 = $fl;} 
  echo '<td>'.$comp13_8.'</td>';
?>
    </tr>
    <tr>
    <td class="one">0</td>
<?php
  if($th1 === $td4){$comp14_1 = $tr; } else {$comp14_1 = $fl;} 
  echo '<td>'.$comp14_1.'</td>';
?>
<?php
  if($th2 === $td4){$comp14_2 = $tr; } else {$comp14_2 = $fl;} 
  echo '<td>'.$comp14_2.'</td>';
?>
<?php
  if($th3 === $td4){$comp14_3 = $tr; } else {$comp14_3 = $fl;} 
  echo '<td>'.$comp14_3.'</td>';
?>
 <?php
  if($th4 === $td4){$comp14_4 = $tr; } else {$comp14_4 = $fl;} 
  echo '<td>'.$comp14_4.'</td>';
?>
<?php
  if($th5 === $td4){$comp14_5 = $tr; } else {$comp14_5 = $fl;} 
  echo '<td>'.$comp14_5.'</td>';
?>
<?php
  if($th6 === $td4){$comp14_6 = $tr; } else {$comp14_6 = $fl;} 
  echo '<td>'.$comp14_6.'</td>';
?>
<?php
  if($th7 === $td4){$comp14_7 = $tr; } else {$comp14_7 = $fl;} 
  echo '<td>'.$comp14_7.'</td>';
?>
<?php
  if($th8 === $td4){$comp14_8 = $tr; } else {$comp14_8 = $fl;} 
  echo '<td>'.$comp14_8.'</td>';
?>
    </tr>
    <tr>
    <td class="one">-1</td>
   <?php
  if($th1 === $td5){$comp15_1 = $tr; } else {$comp15_1 = $fl;} 
  echo '<td>'.$comp15_1.'</td>';
?>
<?php
  if($th2 === $td5){$comp15_2 = $tr; } else {$comp15_2 = $fl;} 
  echo '<td>'.$comp15_2.'</td>';
?>
<?php
  if($th3 === $td5){$comp15_3 = $tr; } else {$comp15_3 = $fl;} 
  echo '<td>'.$comp15_3.'</td>';
?>
 <?php
  if($th4 === $td5){$comp15_4 = $tr; } else {$comp15_4 = $fl;} 
  echo '<td>'.$comp15_4.'</td>';
?>
<?php
  if($th5 === $td5){$comp15_5 = $tr; } else {$comp15_5 = $fl;} 
  echo '<td>'.$comp15_5.'</td>';
?>
<?php
  if($th6 === $td5){$comp15_6 = $tr; } else {$comp15_6 = $fl;} 
  echo '<td>'.$comp15_6.'</td>';
?>
<?php
  if($th7 === $td5){$comp15_7 = $tr; } else {$comp15_7 = $fl;} 
  echo '<td>'.$comp15_7.'</td>';
?>
<?php
  if($th8 === $td5){$comp15_8 = $tr; } else {$comp15_8 = $fl;} 
  echo '<td>'.$comp15_8.'</td>';
?>
    </tr>
    <tr>
    <td class="one">"1"</td>
    <?php
  if($th1 === $td6){$comp16_1 = $tr; } else {$comp16_1 = $fl;} 
  echo '<td>'.$comp16_1.'</td>';
?>
<?php
  if($th2 === $td6){$comp16_2 = $tr; } else {$comp16_2 = $fl;} 
  echo '<td>'.$comp16_2.'</td>';
?>
<?php
  if($th3 === $td6){$comp16_3 = $tr; } else {$comp16_3 = $fl;} 
  echo '<td>'.$comp16_3.'</td>';
?>
 <?php
  if($th4 === $td6){$comp16_4 = $tr; } else {$comp16_4 = $fl;} 
  echo '<td>'.$comp16_4.'</td>';
?>
<?php
  if($th5 === $td6){$comp16_5 = $tr; } else {$comp16_5 = $fl;} 
  echo '<td>'.$comp16_5.'</td>';
?>
<?php
  if($th6 === $td6){$comp16_6 = $tr; } else {$comp16_6 = $fl;} 
  echo '<td>'.$comp16_6.'</td>';
?>
<?php
  if($th7 === $td6){$comp16_7 = $tr; } else {$comp16_7 = $fl;} 
  echo '<td>'.$comp16_7.'</td>';
?>
<?php
  if($th8 === $td6){$comp16_8 = $tr; } else {$comp16_8 = $fl;} 
  echo '<td>'.$comp16_8.'</td>';
?>
    </tr>
    <tr>
    <td class="one">null</td>
<?php
  if($th1 === $td7){$comp17_1 = $tr; } else {$comp17_1 = $fl;} 
  echo '<td>'.$comp17_1.'</td>';
?>
<?php
  if($th2 === $td7){$comp17_2 = $tr; } else {$comp17_2 = $fl;} 
  echo '<td>'.$comp17_2.'</td>';
?>
<?php
  if($th3 === $td7){$comp17_3 = $tr; } else {$comp17_3 = $fl;} 
  echo '<td>'.$comp17_3.'</td>';
?>
 <?php
  if($th4 === $td7){$comp17_4 = $tr; } else {$comp17_4 = $fl;} 
  echo '<td>'.$comp17_4.'</td>';
?>
<?php
  if($th5 === $td7){$comp17_5 = $tr; } else {$comp17_5 = $fl;} 
  echo '<td>'.$comp17_5.'</td>';
?>
<?php
  if($th6 === $td7){$comp17_6 = $tr; } else {$comp17_6 = $fl;} 
  echo '<td>'.$comp17_6.'</td>';
?>
<?php
  if($th7 === $td7){$comp17_7 = $tr; } else {$comp17_7 = $fl;} 
  echo '<td>'.$comp17_7.'</td>';
?>
<?php
  if($th8 === $td7){$comp17_8 = $tr; } else {$comp17_8 = $fl;} 
  echo '<td>'.$comp17_8.'</td>';
?>
      <td></td>
    </tr>
    <tr>
    <td class="one">"php"</td>
<?php
  if($th1 === $td8){$comp18_1 = $tr; } else {$comp18_1 = $fl;} 
  echo '<td>'.$comp18_1.'</td>';
?>
<?php
  if($th2 === $td8){$comp18_2 = $tr; } else {$comp18_2 = $fl;} 
  echo '<td>'.$comp18_2.'</td>';
?>
<?php
  if($th3 === $td8){$comp18_3 = $tr; } else {$comp18_3 = $fl;} 
  echo '<td>'.$comp18_3.'</td>';
?>
 <?php
  if($th4 === $td8){$comp18_4 = $tr; } else {$comp18_4 = $fl;} 
  echo '<td>'.$comp18_4.'</td>';
?>
<?php
  if($th5 === $td8){$comp18_5 = $tr; } else {$comp18_5 = $fl;} 
  echo '<td>'.$comp18_5.'</td>';
?>
<?php
  if($th6 === $td8){$comp18_6 = $tr; } else {$comp18_6 = $fl;} 
  echo '<td>'.$comp18_6.'</td>';
?>
<?php
  if($th7 === $td8){$comp18_7 = $tr; } else {$comp18_7 = $fl;} 
  echo '<td>'.$comp18_7.'</td>';
?>
<?php
  if($th8 === $td8){$comp18_8 = $tr; } else {$comp18_8 = $fl;} 
  echo '<td>'.$comp18_8.'</td>';
?>
    </tr>
    </table>
</div>
</td>
</tr></table>
<h3>Выводы гибком и жестком сравнении:</h3>
<p>
Различие между гибким и жестким сравнением в том, что при жёстком сравнении PHP не пытается привести сравниваемые переменные к одному типу.
</p>

</body>
</html>