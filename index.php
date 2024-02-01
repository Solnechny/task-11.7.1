<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/CSS/style.css" />
    <title>Таблицы PHP</title>
  </head>

  <body>

    
    <h2>Задание 1. Таблица истинности PHP.</h2>

    <?php 

    $a_one = 0;
    $b_one = 0;
    $a_two = 0;
    $b_two = 1;
    $a_three = 1;
    $b_three = 0;
    $a_four = 1;
    $b_four = 1;

    ?>

    <table>
        <tr>
            <th>A</th>
            <th>B</th>
            <th>!A</th>
            <th>A || B</th>
            <th>A && B</th>
            <th>A xor B</th>
        </tr>
        <tr>
            <td> <?= $a_one ?> </td>
            <td> <?= $b_one ?> </td>
            <td> <?= var_dump(!$a_one) ?> </td>
            <td> <?= var_dump($a_one || $b_one) ?> </td>
            <td> <?= var_dump($a_one && $b_one) ?> </td>
            <td> <?= var_dump($a_one xor $b_one) ?> </td>
        </tr>
        <tr>
            <td> <?= $a_two ?> </td>
            <td> <?= $b_two ?> </td>
            <td> <?= var_dump(!$a_two) ?> </td>
            <td> <?= var_dump($a_two || $b_two) ?> </td>
            <td> <?= var_dump($a_two && $b_two) ?> </td>
            <td> <?= var_dump($a_two xor $b_two) ?> </td>
        </tr>
        <tr>
            <td> <?= $a_three ?> </td>
            <td> <?= $b_three ?> </td>
            <td> <?= var_dump(!$a_three) ?> </td>
            <td> <?= var_dump($a_three || $b_three) ?> </td>
            <td> <?= var_dump($a_three && $b_three) ?> </td>
            <td> <?= var_dump($a_three xor $b_three) ?> </td>
        </tr>
        <tr>
            <td> <?= $a_four ?> </td>
            <td> <?= $b_four ?> </td>
            <td> <?= var_dump(!$a_four) ?> </td>
            <td> <?= var_dump($a_four || $b_four) ?> </td>
            <td> <?= var_dump($a_four && $b_four) ?> </td>
            <td> <?= var_dump($a_four xor $b_four) ?> </td>
        </tr>
    </table>

    <br>

    <h2>Задание 2. Таблица сравнения</h2>
    
    <h3>Гибкое сравнение в PHP</h3>

    <?php

    $c_one = true;
    $d_one = true;
    $c_two = false;
    $d_two = false;
    $c_three = 1;
    $d_three = 1;
    $c_four = 0;
    $d_four = 0;
    $c_five = -1;
    $d_five = -1;
    $c_six = "1";
    $d_six = "1";
    $c_seven = null;
    $d_seven = null;
    $c_eight = "php";
    $d_eight = "php";

    ?>

    <table>
        <tr>
            <td></td>
            <th>true</th>
            <th>false</th>
            <th>1</th>
            <th>0</th>
            <th>-1</th>
            <th>"1"</th>
            <th>null</th>
            <th>php</th>
        </tr>
        <tr>
            <th>true</th>
            <td> <?= var_dump($c_one == $d_one) ?> </td>
            <td> <?= var_dump($c_one == $d_two) ?> </td>
            <td> <?= var_dump($c_one == $d_three) ?> </td>
            <td> <?= var_dump($c_one == $d_four) ?> </td>
            <td> <?= var_dump($c_one == $d_five) ?> </td>
            <td> <?= var_dump($c_one == $d_six) ?> </td>
            <td> <?= var_dump($c_one == $d_seven) ?> </td>
            <td> <?= var_dump($c_one == $d_eight) ?> </td>
        </tr>
        <tr>
            <th>false</th>
            <td> <?= var_dump($c_two == $d_one) ?> </td>
            <td> <?= var_dump($c_two == $d_two) ?> </td>
            <td> <?= var_dump($c_two == $d_three) ?> </td>
            <td> <?= var_dump($c_two == $d_four) ?> </td>
            <td> <?= var_dump($c_two == $d_five) ?> </td>
            <td> <?= var_dump($c_two == $d_six) ?> </td>
            <td> <?= var_dump($c_two == $d_seven) ?> </td>
            <td> <?= var_dump($c_two == $d_eight) ?> </td>
        </tr>
        <tr>
            <th>1</th>
            <td> <?= var_dump($c_three == $d_one) ?> </td>
            <td> <?= var_dump($c_three == $d_two) ?> </td>
            <td> <?= var_dump($c_three == $d_three) ?> </td>
            <td> <?= var_dump($c_three == $d_four) ?> </td>
            <td> <?= var_dump($c_three == $d_five) ?> </td>
            <td> <?= var_dump($c_three == $d_six) ?> </td>
            <td> <?= var_dump($c_three == $d_seven) ?> </td>
            <td> <?= var_dump($c_three == $d_eight) ?> </td>
        </tr>
        <tr>
            <th>0</th>
            <td> <?= var_dump($c_four == $d_one) ?> </td>
            <td> <?= var_dump($c_four == $d_two) ?> </td>
            <td> <?= var_dump($c_four == $d_three) ?> </td>
            <td> <?= var_dump($c_four == $d_four) ?> </td>
            <td> <?= var_dump($c_four == $d_five) ?> </td>
            <td> <?= var_dump($c_four == $d_six) ?> </td>
            <td> <?= var_dump($c_four == $d_seven) ?> </td>
            <td> <?= var_dump($c_four == $d_eight) ?> </td>
        </tr>
        <tr>
            <th>-1</th>
            <td> <?= var_dump($c_five == $d_one) ?> </td>
            <td> <?= var_dump($c_five == $d_two) ?> </td>
            <td> <?= var_dump($c_five == $d_three) ?> </td>
            <td> <?= var_dump($c_five == $d_four) ?> </td>
            <td> <?= var_dump($c_five == $d_five) ?> </td>
            <td> <?= var_dump($c_five == $d_six) ?> </td>
            <td> <?= var_dump($c_five == $d_seven) ?> </td>
            <td> <?= var_dump($c_five == $d_eight) ?> </td>
        </tr>
        <tr>
            <th>"1"</th>
            <td> <?= var_dump($c_six == $d_one) ?> </td>
            <td> <?= var_dump($c_six == $d_two) ?> </td>
            <td> <?= var_dump($c_six == $d_three) ?> </td>
            <td> <?= var_dump($c_six == $d_four) ?> </td>
            <td> <?= var_dump($c_six == $d_five) ?> </td>
            <td> <?= var_dump($c_six == $d_six) ?> </td>
            <td> <?= var_dump($c_six == $d_seven) ?> </td>
            <td> <?= var_dump($c_six == $d_eight) ?> </td>
        </tr>
        <tr>
            <th>null</th>
            <td> <?= var_dump($c_seven == $d_one) ?> </td>
            <td> <?= var_dump($c_seven == $d_two) ?> </td>
            <td> <?= var_dump($c_seven == $d_three) ?> </td>
            <td> <?= var_dump($c_seven == $d_four) ?> </td>
            <td> <?= var_dump($c_seven == $d_five) ?> </td>
            <td> <?= var_dump($c_seven == $d_six) ?> </td>
            <td> <?= var_dump($c_seven == $d_seven) ?> </td>
            <td> <?= var_dump($c_seven == $d_eight) ?> </td>
        </tr>
        <tr>
            <th>php</th>
            <td> <?= var_dump($c_eight == $d_one) ?> </td>
            <td> <?= var_dump($c_eight == $d_two) ?> </td>
            <td> <?= var_dump($c_eight == $d_three) ?> </td>
            <td> <?= var_dump($c_eight == $d_four) ?> </td>
            <td> <?= var_dump($c_eight == $d_five) ?> </td>
            <td> <?= var_dump($c_eight == $d_six) ?> </td>
            <td> <?= var_dump($c_eight == $d_seven) ?> </td>
            <td> <?= var_dump($c_eight == $d_eight) ?> </td>
        </tr>
        
    </table>
    

    <br>

    <h3>Жесткое сравнение в PHP</h3>

    <?php

    $e_one = true;
    $f_one = true;
    $e_two = false;
    $f_two = false;
    $e_three = 1;
    $f_three = 1;
    $e_four = 0;
    $f_four = 0;
    $e_five = -1;
    $f_five = -1;
    $e_six = "1";
    $f_six = "1";
    $e_seven = null;
    $f_seven = null;
    $e_eight = "php";
    $f_eight = "php";

    ?>


    <table>
        <tr>
            <td></td>
            <th>true</th>
            <th>false</th>
            <th>1</th>
            <th>0</th>
            <th>-1</th>
            <th>"1"</th>
            <th>null</th>
            <th>php</th>
        </tr>
        <tr>
            <th>true</th>
            <td> <?= var_dump($e_one === $f_one) ?> </td>
            <td> <?= var_dump($e_one === $f_two) ?> </td>
            <td> <?= var_dump($e_one === $f_three) ?> </td>
            <td> <?= var_dump($e_one === $f_four) ?> </td>
            <td> <?= var_dump($e_one === $f_five) ?> </td>
            <td> <?= var_dump($e_one === $f_six) ?> </td>
            <td> <?= var_dump($e_one === $f_seven) ?> </td>
            <td> <?= var_dump($e_one === $f_eight) ?> </td>
        </tr>
        <tr>
            <th>false</th>
            <td> <?= var_dump($e_two === $f_one) ?> </td>
            <td> <?= var_dump($e_two === $f_two) ?> </td>
            <td> <?= var_dump($e_two === $f_three) ?> </td>
            <td> <?= var_dump($e_two === $f_four) ?> </td>
            <td> <?= var_dump($e_two === $f_five) ?> </td>
            <td> <?= var_dump($e_two === $f_six) ?> </td>
            <td> <?= var_dump($e_two === $f_seven) ?> </td>
            <td> <?= var_dump($e_two === $f_eight) ?> </td>
        </tr>
        <tr>
            <th>1</th>
            <td> <?= var_dump($e_three === $f_one) ?> </td>
            <td> <?= var_dump($e_three === $f_two) ?> </td>
            <td> <?= var_dump($e_three === $f_three) ?> </td>
            <td> <?= var_dump($e_three === $f_four) ?> </td>
            <td> <?= var_dump($e_three === $f_five) ?> </td>
            <td> <?= var_dump($e_three === $f_six) ?> </td>
            <td> <?= var_dump($e_three === $f_seven) ?> </td>
            <td> <?= var_dump($e_three === $f_eight) ?> </td>
        </tr>
        <tr>
            <th>0</th>
            <td> <?= var_dump($e_four === $f_one) ?> </td>
            <td> <?= var_dump($e_four === $f_two) ?> </td>
            <td> <?= var_dump($e_four === $f_three) ?> </td>
            <td> <?= var_dump($e_four === $f_four) ?> </td>
            <td> <?= var_dump($e_four === $f_five) ?> </td>
            <td> <?= var_dump($e_four === $f_six) ?> </td>
            <td> <?= var_dump($e_four === $f_seven) ?> </td>
            <td> <?= var_dump($e_four === $f_eight) ?> </td>
        </tr>
        <tr>
            <th>-1</th>
            <td> <?= var_dump($e_five === $f_one) ?> </td>
            <td> <?= var_dump($e_five === $f_two) ?> </td>
            <td> <?= var_dump($e_five === $f_three) ?> </td>
            <td> <?= var_dump($e_five === $f_four) ?> </td>
            <td> <?= var_dump($e_five === $f_five) ?> </td>
            <td> <?= var_dump($e_five === $f_six) ?> </td>
            <td> <?= var_dump($e_five === $f_seven) ?> </td>
            <td> <?= var_dump($e_five === $f_eight) ?> </td>
        </tr>
        <tr>
            <th>"1"</th>
            <td> <?= var_dump($e_six === $f_one) ?> </td>
            <td> <?= var_dump($e_six === $f_two) ?> </td>
            <td> <?= var_dump($e_six === $f_three) ?> </td>
            <td> <?= var_dump($e_six === $f_four) ?> </td>
            <td> <?= var_dump($e_six === $f_five) ?> </td>
            <td> <?= var_dump($e_six === $f_six) ?> </td>
            <td> <?= var_dump($e_six === $f_seven) ?> </td>
            <td> <?= var_dump($e_six === $f_eight) ?> </td>
        </tr>
        <tr>
            <th>null</th>
            <td> <?= var_dump($e_seven === $f_one) ?> </td>
            <td> <?= var_dump($e_seven === $f_two) ?> </td>
            <td> <?= var_dump($e_seven === $f_three) ?> </td>
            <td> <?= var_dump($e_seven === $f_four) ?> </td>
            <td> <?= var_dump($e_seven === $f_five) ?> </td>
            <td> <?= var_dump($e_seven === $f_six) ?> </td>
            <td> <?= var_dump($e_seven === $f_seven) ?> </td>
            <td> <?= var_dump($e_seven === $f_eight) ?> </td>
        </tr>
        <tr>
            <th>php</th>
            <td> <?= var_dump($e_eight === $f_one) ?> </td>
            <td> <?= var_dump($e_eight === $f_two) ?> </td>
            <td> <?= var_dump($e_eight === $f_three) ?> </td>
            <td> <?= var_dump($e_eight === $f_four) ?> </td>
            <td> <?= var_dump($e_eight === $f_five) ?> </td>
            <td> <?= var_dump($e_eight === $f_six) ?> </td>
            <td> <?= var_dump($e_eight === $f_seven) ?> </td>
            <td> <?= var_dump($e_eight === $f_eight) ?> </td>
        </tr>
    </table>
    </section>

    <h3>Выводы</h3>

    <p>Основным различием является то, что
        гибкое сравнение (==) сравнивает значения после приведения к одному типу, тогда как жесткое сравнение (===) сравнивает значения и их типы без приведения к одному.
    </p>

  </body>