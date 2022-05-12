<?php
    $title = "Switch Statements";
    include 'includes/header.php';
?>
    <h1><?php echo "PHP - $title" ?></h1>
    <?php
        $val = 'E+';

        switch($val){
            case 'A':
                echo "<h2>Excellent work!</h2>";
                break;
            case 'B':
                echo "<h2>Good Work!</h2>";
                break;
            case 'C':
                echo "<h2>Well Done!</h2>";
                break;
            default:
                echo "<h2>Better Luck Next Time!</h2>";
                break;
        }
    ?>

<?php
    require 'includes/footer.php';
?>