
<?php
echo "<a href=\"./\">BACK</a>";
/* 6. --- DATA TYPES ---
 *
 * Variables can store data of different types.
 *
 * No need to declare type of variable.
 *
 * Data Types common in PHP :
 * String
 * Integer
 * Float
 * Boolean
 * Array
 * Object
 *
 *
 */
echo "<h1>6. DATA TYPES</h1>";

/*
 * EXERCISE 1 : List all data types in variables and display it.
 */

/*
 * SUGGESTION :
 * $arr = [1,'2','Nam'];
 * print_r($arr);
 */
echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";

$arr = [1, '2', 'Nam'];
// echo $arr[1] == 2 ? $arr[1] > 5 ? "Bigger than 5" : "Smaller than 5" : "No";
if ($arr[1] === 2) {
    if ($arr[1] > 5) {
        echo "bigger than 5";
    } else {
        echo "smaller than 5";
    }
} else {
    echo "No";
}
var_dump($arr);