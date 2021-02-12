<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Tavola Pitagorica</title>
    </head>
    <body>
        <table border='1'>
        <?php
            for($tr=1;$tr<=10;$tr++){ 
                echo "<tr>"; 
                    for($td=1;$td<=10;$td++){ 
                           echo "<td align='center'>".$tr*$td."</td>"; 
                    } 
                echo "</tr>"; 
            }
            ?>
        </table>
    </body>
</html>