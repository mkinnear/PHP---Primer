<?php
    $title = "Date $ Time Manipulation";
    include 'includes/header.php';
?>
    <h1><?php echo "PHP - $title"; ?></h1>
    <?php
        $currentTime = time();

        echo "$currentTime<br/>";

        // get date function 
        $currentDate = getdate();
        $size = count($currentDate);
        echo $size . "<br/>";
        // printing the day of the month in a numeric format
        echo"From the getdate() array: " . $currentDate['mday'] . "<br/>";
        // printing the month of the year in a numeric format
        echo "From the getdate() array: " . $currentDate['mon'] . "<br/>";
        // printing the year in a numeric format of 4 digits
        echo "From the getdate() array: " . $currentDate['year'] . "<br/>";

    ?>

<?php
    require 'includes/footer.php';
?>