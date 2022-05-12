<?php
    $title = "String Manipulation";
    include 'includes/header.php';
?>
    <h1><?php "PHP - $title"; ?></h1>
    <?php
        $str1 = "This is the one";
        $str2 = "who started this shit";
        $name = "keegan kinnear";

        echo $str1 . " " . $str2 . "<br/>";

        echo "<hr>";
        // uppercase first word's first letter
        echo ucfirst($name) . "<br/>";

        // uppercase the first letter of each word
        echo ucwords($name) . "<br/>";

        // uppercasing every letter in a string
        echo strtoupper($name) . "<br/>";

        // lowercasing every letter in the string
        echo strtolower("THIS WAS ALL UPPERCASE!") . "<br/>";
        echo "<hr>";

        // repeating a string
        echo "The string: '$name' getting repeated 3 times... ->" . str_repeat($name, 3) . "<br/>";

        // transforming the repeated string to uppercase
        echo "The string: '$name' getting repeated 3 times... ->" . strtoupper(str_repeat($name, 3)) . "<br/>";

        echo "<hr>";
        // printing a subset of a string
        echo "The subset of string: '$name' is...->" . substr($name, 7, 7) . " = " . strlen($name) . "<br/>";
         // replacing a subset of a string
         echo "Replacing a subset of '$name' with 'jayden':....->" . substr_replace($name, "jayden", 7, 7) . " = " . strlen(substr_replace($name, "jayden", 7, 7)) . "<br/>";

         // searching the occurances of a substring inside a string
         echo "counting the occurance on 'n' in $name...->" . substr_count($name, "a", 0, 14);
         echo "<hr>";

         // finding the first occurance of a character if present in a substring, then starts printing the string from that character's index
         echo "Print the string '$name' starting from the first occurance of character 'a' if it's present: " . strchr($name, 'a') . "<br/>";

         // finding the first occurance of a substring inside a string
         echo "the first occurance of the string 'gan' is in the: " . strpos($name, "gan") . " position in the string '$name'";
         echo "<hr>";

         // trim strings
         $greeting = "  Hello World!  ";
         echo $greeting . "<br/>";
         echo trim($greeting) . "<br/>";
          // trimming the left side of the string
          $greeting = "_Hello World!_";
          echo $greeting . "<br/>";
          echo ltrim($greeting, '_') . "<br/>";
          // trimming the right side of the string
          echo $greeting . "<br/>";
          echo rtrim($greeting, "_");
          echo "<hr>";



    ?>

<?php
    require 'includes/footer.php';
?>