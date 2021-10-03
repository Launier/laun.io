<!DOCTYPE html>

<html lang="en">
    <body>

        <h1>My first PHP page</h1>

        <?php
            echo "<p> Hello World! </p>";
            $characterName = "John";
            $characterAge = 35;
            echo "<table>
                    <tr>    
                    <td>
                    Name
                    </td>
                    <td>
                    $characterName
                    </td>
                    </tr>
                    <tr>
                    <td>
                    Age
                    </td>
                    <td>
                    $characterAge
                    </td>
                    </tr>           
                   </table>";
         ?>

        <h2> Form </h2>

        <?php ?>
            <form action="test.php" method="get">
                Name: <input type="text" name="name">
                <input type="submit">
            </form>
            <br>
            Your name is <?php echo $_GET["name"] ?>

        <h2> Calculator </h2>

        <form action="test.php" method="get">
            <input type="number" name="num1">
            <br>
            <input type="number" name="num2">
            <input type="submit">
        </form>

        Answer: <?php echo $_GET["num1"] + $_GET["num2"] ?>

    </body>
</html>