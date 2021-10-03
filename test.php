<!DOCTYPE html>

<html lang="en">
    <body>

        <h1>My first PHP page</h1>

        <?php

        $characterName = "John";
        $characterAge = 35;
            echo "<p> Hello World! </p>";

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

    </body>
</html>