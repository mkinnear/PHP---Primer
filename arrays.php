<?php
    $title = "Arrays";
    include 'includes/header.php';
?>
    <h1><?php echo "PHP - $title"; ?></h1>

    <?php
        $numbers = array(1, 2, 3, 'a', 'A', 6, 7, 8, 9, 10);

        echo "<p>$numbers[3]</p>";
        $size = count($numbers);
        
        echo "<p>the size of the array is: ".count($numbers)." and = $size</p>";

        for ($count = 0; $count <  $size; $count++)
        {
            echo "$numbers[$count]\n";
        }
    ?>

<?php
    require 'includes/footer.php';
?>