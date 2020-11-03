<?PHP
    $num = 1;
    while ($num < 100) {
        if ($num % 3 == 0) {
            echo "Fizz!!";
        } 
        if ($num % 5 == 0) {
            echo "Buzz!!";
        } 
        if ($num % 3 != 0 && $num % 5 != 0) {
            echo $num;
        }
        echo "<br>";
        $num++;
    }
?>

<!-- $num = 1;
    while ($num < 100) {
        if ($num % 3 == 0 && $num % 5 != 0) {
            echo "Fizz!!";
        } elseif ($num % 3 != 0 && $num % 5 == 0) {
            echo "Buzz!!";
        } elseif ($num % 3 == 0 && $num % 5 == 0) {
            echo "Fizz!!Buzz!!";
        } else {
            echo $num;
        }
        echo "<br>";
        $num++;
    } -->