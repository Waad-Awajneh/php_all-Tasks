<?php
//  Q1: Write a program that will count the "r" characters in a string

function countRinString($str)
{
    $count = 0;
    for ($i = 0; $i <= strlen($str); $i++) {
        if (strtolower(substr($str, $i, 1)) == 'r') {
            $count++;
        }
    }
    echo <<<"Answer"
    <pre>
    Q1: Write a program that will count the "r" characters in a string
    <br>
    r count = $count
    <br>
    </pre>
    Answer;
}

countRinString("testrrRRrr");


// Q2: Write a PHP function that checks whether a string is all lowercase

function checkLower($str)
{
    // while(substr($str,1)>='a'&& substr($str,1)<='z')
    for ($i = 0; $i <= strlen($str); $i++) {
        if (!(substr($str, $i, 1) >= 'a') && !(substr($str, $i, 1) <= 'z')) {
            echo <<<"Answer"
            <pre>
            Q2: Write a PHP function that checks whether a string is all lowercase
            <br>
            $str --> is Not all lowercase
            <br>
            /pre>
            Answer;
            return;
        }
    }
    echo <<<"Answer"
<pre>
Q2: Write a PHP function that checks whether a string is all lowercase   
 <br>
 $str --> is all lowercase
 <br>
</pre>
Answer;
}
checkLower("aaaaaaaaaaaaaaaa");




// Q3: Write a PHP script that creates the following table (use for loops).

function createTable()
{
    echo "<table>";
    for ($i = 1; $i < 11; $i++) {
        echo "<tr>";
        for ($j = 1; $j < 11; $j++) {

            echo "<td>" . $i * $j . "</td>";
        }
        echo "</tr>";
        // echo "<br>";
    }
    echo "</table>";
}
echo "<pre>";
echo <<<"Answer"
<pre>
Q3: Write a PHP script that creates the following table (use for loops).
</pre>
Answer;
createTable();
echo "</pre>";






// Q5: Write a PHP Calculator class that will accept two values as arguments, then add them, subtract them, multiply them together, or divide them on request. For example :
// $mycalc = new MyCalculator( 12, 6);
// echo $mycalc- > add(); // Displays 18
// echo $mycalc- > multiply()

// class MyCalculator
// {
//     protected $num1, $num2;
//     function __construct($num1, $num2)
//     {
//         $this->num1 = $num1;
//         $this->num2 = $num2;
//     }


//     function __destruct()
//     {
//         echo <<<"Answer"
//     <pre>
//     THe end of all WarpUp tasks <br>
//     </pre>
//     Answer;
//     }

//     public function add()
//     {
//         return $this->num1 + $this->num2;
//     }
//     public function sub()
//     {
//         return $this->num1 - $this->num2;
//     }

//     public function multiply()
//     {
//         return $this->num1 * $this->num2;
//     }

//     public function div()
//     {
//         return $this->num1 / $this->num2;
//     }
// }

// class Scientific extends MyCalculator{
//     protected $num1, $num2;
// function __construct( $num1, $num2){
//     MyCalculator::__construct( $num1, $num2);
// }

// public function power()
// {
//     return pow($this->num1 , $this->num2);
// }

// function __destruct()
// {
//     echo <<<"Answer"
// <pre>
// THe end of Scientific class <br>
// </pre>
// Answer;
// }


// }

// $mycalc = new MyCalculator( 10, 2);
// $cal2= new Scientific(10,2);
// echo "<pre>";
// echo <<<"Answer"
// <pre>
// Q5: Write a PHP Calculator class that will accept two values as arguments, then add them, subtract them, multiply them together, or divide them on request. 
// </pre>
// Answer;
// echo "</pre>";


// echo "parent class Add & sub (10,2) <br>";

// echo $mycalc-> add()."<br>"; 
// echo $mycalc-> sub()."<br>";

// echo "child class Add & sub & power (10,2) <br>";
// echo $cal2-> add()."<br>"; 
// echo $cal2-> multiply()."<br>";
// echo $cal2-> power()."<br>"; 










// Q4: Write a PHP script to extract text (within square brackets ) from a string. 
// Sample strings: 'The quick brown [fox].'
// Expected Output: 'fox'

function extractWithinBrackets($str)
{
    $newStr = "";
    for ($i = 0; $i <= strlen($str); $i++) {
        if (substr($str, $i, 1) == '[') {
            while (substr($str, ++$i, 1) != "]" && $i <= strlen($str)) {
                $newStr .= substr($str, $i, 1);
            }
        }
    }
    return $newStr;
}
echo "<pre>";
echo <<<"Answer"
<pre>
Q4: Write a PHP script to extract text (within square brackets ) from a string.
</pre>
Answer;
echo extractWithinBrackets('The quick brown [fox].');
echo "</pre>";


