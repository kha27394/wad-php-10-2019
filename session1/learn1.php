<?php
    echo "Hello World";
    $myClass = "WAD PHP";
    echo $myClass;

    //Các phép toán cơ bản: +,-,*,/,%
    $numberOne = 7;
    $numberTwo = 8;
    echo "<br>";
    echo $numberOne + $numberTwo;

    //Các phép so sánh: >,<,>=,<=,==,!=
    //Hàm trong PHP
    function myFunction()
    {
        $a = 7;
        $b = 8;
        return $a + $b;
    }

    echo "<br>";
    echo "FUNCTION :" . myFunction();

    function myFunction1($x, $y)
    {
        return $x + $y;
    }

    echo "<br>";
    echo "FUNCTION 1 :" . myFunction1(7, 8);
    echo "<br>";

    //Switch case:
    function BT2($n)
    {
        switch ($n) {
            case 2:
                echo "Ngày thứ 2";
                break;
            case 3:
                echo "Ngày thứ 3";
                break;
            case 4:
                echo "Ngày thứ 4";
                break;
            case 5:
                echo "Ngày thứ 5";
                break;
            case 6:
                echo "Ngày thứ 6";
                break;
            case 7:
                echo "Ngày thứ 7";
                break;
            default:
                echo "Không phải ngày trong tuần";
                break;
        }
    }

    BT2(7);

    //Vòng lặp: for, while, foreach, do while
    for ($i = 1; $i < 10; $i++) {
        echo $i . "<br>";
    }/*
    $i = 1;
    while ($i < 10) {
        echo $i;
    }
    do {
        echo $i;
    } while ($i < 10);*/


    function BT3($n)
    {
        if ($n > 0 && $n <= 100) {

            if ($n % 2 != 0 && $n % 3 != 0 && $n % 6 != 0){
                echo "Không chia hết cho 2,3,6";
                return;
            }
            if ($n % 6 == 0) {
                echo  $n." Chia hết cho 6 <br>";
                return;
            } else {
                if ($n % 2 == 0) {
                    echo $n . " Chia hết cho 2 <br>";
                }
                if ($n % 3 == 0) {
                    echo $n . " Chia hết cho 3 <br>";
                }

            }

        }
    }

    BT3(15);
?>