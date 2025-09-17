<!--Hello World!

<h1>Hello Warudo!</h1>

<style>
    h1{
        color:blue;
    
    }
</style>
-->
<script>
    //alert("Hello Warudo!");
</script>

<?php 
    // echo "Hello Warudo!";
?>

<!-- Hello -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>This Is My First PHP Page</h1> -->

   <?php 
    //echo "<b>Привет my name is Boris</b><br>"; 

    //aZ09_
   /* $a = 5;                                                                                 
    var_dump($a);   
    var_dump("Boris");
    var_dump(3.14);
    var_dump(true);
    var_dump([1,2,3]);
    var_dump("null");
    */
    

   
    /* $a = 5; //global

    echo $a. "<br>";

   function test(){
    static $a = 0; // static
    $b = 10;       // local
    echo $a . "<br>";
    $a++;
}
    test(); //
    test(); //
*/
    // echo("Hello<br>"),("Hello<br>"),("Hello<br>");
    // echo("World<br>"),("World<br>"),("World<br>");
    // print("Hello<br>");
    // print("World<br>");

    // $a = 5;
    // echo "$a Eggs"

    // $a = "eggs and bacon";
    // $b = -5;
    // $c = 3.14;
    // $d = false;
    // $e = [1,2,3];
    // $f = new stdClass();
    // $g = null;
    // $h = fopen("php_practice.php", "r");

    // var_dump($a);
    // echo "<br>";
    
    // var_dump($b);
    // echo "<br>";
    
    // var_dump($c);
    // echo "<br>";
    
    // var_dump($d);
    // echo "<br>";
    
    // var_dump($e);
    // echo "<br>";
    
    // var_dump($f);
    // echo "<br>";
    
    // var_dump($g);
    // echo "<br>";
    
    // var_dump($h);
    // echo "<br>";
    
    // echo strlen($a), "<br>";
    // echo str_word_count($a), "<br>";
    // echo strpos($a, "eggs"), "<br>";
    // echo strtoupper($a), "<br>";
    // echo strtolower($a), "<br>";
    // echo str_replace("bacon", "milk", $a), "<br>";
    // echo strrev($a), "<br>";
    // echo trim("coke and pepsi   "), "<br>";
    // echo strlen($a), "<br>";
    // var_dump(explode("o","coke and pepsi"));

    // echo "french"."fries";
    // $x = "french";
    // $y = "fries";

    // echo $x ." ". $y, "<br>";
    // echo "$x $y", "<br>";

    // echo "Moore \$Helmn\" Forger";

    // $a = 5;
    // $b = 3.14;
    // $c = "25";

    // echo PHP_INT_MAX, "<br>";
    // echo PHP_INT_MIN, "<br>";
    // echo PHP_INT_SIZE , "<br>";

    // echo is_int($c), "<br>";

    // echo PHP_FLOAT_MAX, "<br>";
    // echo PHP_FLOAT_MIN, "<br>";
    // echo PHP_FLOAT_DIG, "<br>";
    // echo PHP_FLOAT_EPSILON, "<br>";

    // echo is_float($b), "<br>";

    // echo is_numeric($c), "<br>";

    // $a = (int)"eggs and bacon";
    // $b = (int) -5;
    // $c = (int) 3.14;
    // $d = (int) false;
    // $e = (int) null; 
    // $f = (int) fopen("php_practice.php", "r");
    
    // $a = (float)"eggs and bacon";
    // $b = (float) -5;
    // $c = (float) 3.14;
    // $d = (float) false;
    // $e = (float) null; 
    // $f = (float) fopen("php_practice.php", "r");

    // $a = (bool)"eggs and bacon";
    // $b = (bool) -5;
    // $c = (bool) 3.14;
    // $d = (bool) false;
    // $e = (bool) null; 
    // $f = (bool) fopen("php_practice.php", "r");

    // $a = (array)"eggs and bacon";
    // $b = (array) -5;
    // $c = (array) 3.14;
    // $d = (array) false;
    // $e = (array) null; 
    // $f = (array) fopen("php_practice.php", "r");

    // $a = (null)"eggs and bacon";
    // $b = (null) -5;
    // $c = (null) 3.14;
    // $d = (null) false;
    // $e = (null) null; 
    // $f = (null) fopen("php_practice.php", "r");
    
    // unset($a)

    // var_dump($a);
    // echo "<br>";
    
    // var_dump($b);
    // echo "<br>";
    
    // var_dump($c);
    // echo "<br>";
    
    // var_dump($d);
    // echo "<br>";
    
    // var_dump($e);
    // echo "<br>";
    
    // var_dump($f);
    // echo "<br>";
    
    // echo pi(),"<br>";

    // echo min(5,1,3,2),"<br>";
    // echo max(5,1,3,2),"<br>";

    // echo abs(-10),"<br>";

    // echo sqrt(16),"<br>";

    // echo round(3.45, PHP_ROUND_HALF_UP),"<br>";
    // echo rand(1,10);
    

    //constants
    // $x = 10;
    // define("_GREETING", "Hello World!");

    // echo $x;
    // echo _GREETING;
    
    // const _GREETING2 = "HELLO ALIENS";
    // echo _GREETING2;

    // function test(){
    //     echo _GREETING2;
    // }
    
    // test();
    
    // echo $x;
    // unset(_GREETING2);
    // echo 

    //php operators
    //arithmetics

    // // + add
    // echo 10 + 10 + 10, "<br>";

    // //- sub
    // echo 10 - 10 - 10, "<br>";

    // //add and sub 
    // echo 10 + 20 - 100 - 10, "<br>"; //left to right

    // // * mult
    // echo 10 * 10 * 10, "<br>";

    // // / div
    // echo 10 / 5 / 10, "<br>";

    // //mult and div
    // echo 10 / 5 * 2, "<br>";

    // //add and div || add/sub and div/mult 
    // echo 50 + 10 / 2, "<br>"; //first is mult/div before add/sub

    // // % mod
    // echo 7 % 3;

    // // ** exponent
    // echo 10 ** 10, "<br>";

    //assignment

    // //equals
    // $x = 10;
    
    // // +=
    // $x = $x + 10;
    // $x += 10;


    // // -=
    // $x = $x - 10;
    // $x -= 10;


    // //=
    // $x = $x / 10;
    // $x /= 10;

    // //*=
    // $x = $x * 10;
    // $x *= 10;

    // echo $x;


    //comparison
    // == equals to = similar value
    // var_dump(10 == 10, "<br>");
    // === identical = similar value and data types
    // var_dump(10 === 10, "<br>");
    // != <> not equals to = not similar value
    // var_dump(10 != 10, "<br>");
    // var_dump(10 <> 10, "<br>");
    // !== not identical = not similar value or not similar data types
    // var_dump(10 !== 10, "<br>");
    // < less than = check if first value is less than second value
    // var_dump(10 < 10, "<br>");
    // > greater than = check if first value is greater than second value
    // var_dump(10 > 10, "<br>");    
    // <= less than or equals to the second value
    // var_dump(10 <= 10, "<br>");
    // >= greater than or equals to the second value
    // var_dump(10 >= 10, "<br>");
    // <=> spaceship = check if first value is less than or equals or greater than second value
    // var_dump(1 <=> 2, "<br>");

    //increment / decre
    // pre-increment
    // $x = 10;
    // echo ++$x, "<br>";

    // //post-increment
    // $y = 10;
    // echo $y++, "<br>";
    // echo $y, "<br>";

    // //pre-decrement
    //   $x = 10;
    // echo --$x, "<br>";
    
    // //post-increment
    // $y = 10;
    // echo $y--, "<br>";
    // echo $y, "<br>";

    //    $gender = "female";
    //     $x = $gender == "male" ? "Mr." : "Ms.";

    //     echo $x = $gender == "male" ? "Mr." : "Ms.";

    //     echo $x;

    // $color = "R" ?? "Red";
    // echo $color;

    // $students = array(
    //     array("name" => "Mary", "gender" => "Female", "age" => 16),
    //     array("name" => "Ray", "gender" => "Male", "age" => 17),
    //     array("name" => "Hardy", "gender" => "Male", "age" => 20),
    // );

    // foreach($students as $student){
    //       echo "<h1>Name:" . $student["name"] . "</h1>";
    //       echo "<ul>";
    //       echo "<li>Gender:" . $student["gender"] . "</li>";
    //       echo "<li>Age:" . $student["age"] . "</li>";
    //       echo "</ul>";
    // }
    
    /*
    <?php foreach ($students as $student){ ?>
        <h1><?php echo $student['name']; ?></h1>
        <ul>
            <li><?php echo $student['gender']; ?></li>
            <li><?php echo $student['age']; ?></li>
        </ul>
    <?php } ?>
    */
  /*  ?>
    <table>
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Age</th>
        </tr>
        <?php foreach ($students as $student){ ?>
            <tr>
                <td><?php echo $student['name']; ?></td>
                <td><?php echo $student['gender']; ?></td>
                <td><?php echo $student['age']; ?></td>
            </tr>
        <?php } ?>
    </table> */




    ?>
</html>
