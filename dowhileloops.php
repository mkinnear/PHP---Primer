<?php
    $title = "While - DoWhile Loops";
    include 'includes/header.php';
?>
    <h1><?php echo "PHP - $title"; ?></h1>
    <?php
        $condition = 0;
        while ($condition++ < 10)
        {
            echo "<h3>Hello world!</h3>";
        }
        echo "Loop Exit";
    ?>
    <h1>Do While Loop</h1>
    <?php
        do{
            echo "<h3>Hello Do while</h3>";
        }while ($condition++ < 20);
        echo "Loop Exit";
    ?>

<?php
    require 'includes/footer.php';
?>