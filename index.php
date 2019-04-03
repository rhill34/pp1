<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'functions.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 1</title>
</head>
<body>
    <header>
        <h1>Steps</h1>
        <ol>
            <li>
                Create an index.php file in
                    your PPI directory and
                    give it a title and header
                    "Pair Program 1 Preview the page in a browser.
            </li>
            <br>
            <li>
                In a PHP block, define a function printArr()
                that takes an array as a parameter and prints
                the array, one item per line. <br> Then, outside the
                function, define an array called $numbers,
                which contains 7, 9, 8, 9, 8, 8, 6.
                Print the array using your function.
                <br>
                <div style="text-align: center;">
                <?php
                /**
                 * array called $numbers, which contains
                 * 7,9,8,9,8,8,6. Print array using your function
                 */
                $numbers = array(7,9,8,9,8,8,6);
                printArr($numbers);
                ?>
                </div>
            </li>
            <li>
                Move your print function
                into an include file called functions.php
                in the same directory.
                Make sure that it still works.
            </li>

        </ol>

    </header>
</body>
</html>
