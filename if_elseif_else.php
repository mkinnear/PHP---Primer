<?php
    $title = "if - else if - else";
    include 'includes/header.php';
?>
    <h1><?php echo "PHP - $title"; ?></h1>
    <?php
        $val = 50;
        if ( $val < $val )
            echo "<h1>You Failed!</h1>";
        elseif ($val >= 50 || $val < 80 )
            echo "<h1>You Passed!</h1>";
        else
            echo "<h1>You Passed with a Distinction!</h1>";
    ?>

<?php
    require 'includes/footer.php';
?>