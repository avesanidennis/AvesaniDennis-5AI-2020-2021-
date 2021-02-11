<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversione</title>
</head>
<body>
    <form action="" method="post">
        <p>Celsius: <input type="text" name="c" /></p>
        <p>Fahrenheit: <input type="text" name="f" /></p>
        <input type="submit" name="btn" value="Converti">
    </form>
    <?php
        if(isset($_POST['btn'])) {
            if(isset($_POST['f'])) {
                echo "<p>Celsius: " . 5/9*($_POST['f']-32) . "</p>";
            }

            if(isset($_POST['c'])) {
                echo "<p>Fahrenheit: " . ((9/5*$_POST['f'])+32) . "</p>";
            }
        }
    ?>
</body>
</html>