<?php
    $title = "For Loops";
    include 'includes/header.php';
?>
    <h1><?php echo " PHP - $title"; ?></h2>
    <?php
        for ($count = 0; $count < 10; $count++){
            echo "<p>[$count]: Hello World</p>";
        }
        for ($count = 0; $count < 10; $count++){
            echo "$count\n";
        }
    ?>

<?php
    require 'includes/footer.php';
?>