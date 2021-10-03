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