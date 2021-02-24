<?php
    if(!isset($_COOKIE['da_indovinare'])) {
        setcookie("da_indovinare", rand(1, 10));
    }

    if(!isset($_COOKIE['tentativi'])) {
        setcookie('tentativi', 5);
    }

    function reset_game() {
        setcookie("da_indovinare", rand(1, 10));
        setcookie('tentativi', 5);
    }
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indovina Numero</title>
</head>
<body>
    <form action="" method="get">
        <p>Numero: <input type="text" name="numero" /></p>
        <input type="submit" name="btn" value="Tenta la fortuna!">
    </form>
    <?php
        if(isset($_GET['numero'])) {
            $numero = $_GET['numero'];
            if(is_numeric($numero)) {
                $da_indovinare = $_COOKIE['da_indovinare'];
                $tentativo = $_COOKIE['tentativi'];

                if($numero == $da_indovinare) {
                    # Vittoria
                    echo "<p>Hai vinto con " . $tentativo . " tentativi/o rimasti/o!</p>";
                    reset_game();

                } else {
                    if ($tentativo == 0) {
                        # Ultimo tentativo
                        echo "<p>Mi dispiace, hai perso! Era il tuo ultimo tentativo.</p>";
                        # Reset
                        reset_game();

                    } else {
                        # Numero maggiore o minore
                        if($numero < 1 || $numero > 10) {
                            echo "<p>Occhio! Il numero è compreso tra 1 e 10.</p>";
                        } else {
                            if($numero < $da_indovinare) {
                                echo "<p>Il numero che stai cercando di indovinare e' piu' grande!</p>";
                            } else {
                                echo "<p>Il numero che stai cercando di indovinare e' piu' piccolo!</p>";
                            }
                            echo "<p> Hai ancora " . $tentativo . " tentativi/o rimasti/o!</p>";

                            # Scalo tentativo
                            setcookie('tentativi', ($tentativo-1));
                        }
                    }
                }
            } else {
                echo "<p>Inserisi un numero!</p>";
            }
        } else {
            echo "<p>Inserisi un valore!</p>";
        }
    ?>
</body>
</html>