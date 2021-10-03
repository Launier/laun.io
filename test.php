<!DOCTYPE html>

<html lang="en">
    <body>

        <h1>My first PHP page</h1>

        <?php
            echo "<p> Hello World! </p>";
            $characterName = "John";
            $characterAge = 35;
            echo "<ul>
                <li> Name is $characterName </li>
                </ul>";
            echo "Age is $characterAge";
         ?>

        <h2> Form </h2>

        <?php ?>
            <form action="test.php" method="get">
                Name: <input type="text" name="name">
                <input type="submit">
            </form>
            <br>
            Your name is <?php echo $_GET["name"] ?>

    </body>
</html>