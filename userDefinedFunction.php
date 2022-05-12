<?php
    $title = "User Defined Functions";
    include 'includes/header.php';
?>
    <h1><?php echo "PHP - $title"; ?></h1>
    <hr>
    <form method="post">
        <label for="input">Input your mathematical expression</label><br/>
        <input type="text" name="subject">
        <button type="button" class="btn btn-dark">calculate</button>
        <a href="https://www.heroku.com" class="btn btn-danger" target="_blank">heroku</a>
        <!-- <input type="submit" name="calculate"> -->
    </form>

    <?php
        if (!isset($_POST["subjext"]))
        {
            echo $_POST["subject"];
        }

    ?>

<?php
    require 'includes/footer.php';
?>