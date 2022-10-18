<?php
    // Connexio bd
    // $mysqli = new mysqli("127.0.0.1", "root", "", "animals");

    if (isset($_POST['send'])) {
        $mail = $_POST['mail'];
        echo $mail;
    }

    // Query
    // $result = $mysqli->query('SELECT * FROM animal');
    // $data = $result->fetch_all(MYSQLI_ASSOC);
    // $result->close();

    // $mysqli->close();
?>

<html>
    <head>
        <style>
            body 
            {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h2>Coming soon</h2>
        <p>Estigues al corrent de totes les novetats!</p>
        <form action="formulari.php" method="post">
            Correu: 
            <input type='text' name='mail' />
            <br /><br />
            <input type='submit' name='send' value='Enviar' />
        </form>
    </body>
</html>