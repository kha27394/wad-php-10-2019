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

    function BT2($n)
    {
        switch ($n) {
            case 2:
                echo "Ngày thứ 2";
                return;
            case 3:
                echo "Ngày thứ 3";
                return;
            case 4:
                echo "Ngày thứ 4";
                return;
            case 5:
                echo "Ngày thứ 5";
                return;
            case 6:
                echo "Ngày thứ 6";
                return;
            case 7:
                echo "Ngày thứ 7";
                return;
            default:
                echo "Không phải ngày trong tuần";
                return;
        }
    }
    BT2(7);

?>