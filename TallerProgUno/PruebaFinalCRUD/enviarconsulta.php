<?php

    if (isset($_POST['enviar'])) {
        if (!empty($_POST['nombconsu']) && !empty($_POST['correoconsu']) && !empty($_POST['asunconsu']) && !empty($_POST['comment'])) {
            $cnomb = $_POST["nombconsu"];
            $ccorreo = $_POST["correoconsu"];
            $casun = $_POST["asunconsu"];
            $ccomm = $_POST["comment"];

            $header = "From: noreply@animesjaar.com" . "\r\n";
            $header = "Reply-To: noreply@animesjaar.com" . "\r\n";
            $header = "X-Mailer: PHP/". phpversion();
            $mail = @mail($ccorreo, $casun, $ccomm, $header);

            if ($mail) {
                header ('location: contacto.php?enviado');
            } else {
                header ('location: contacto.php?no_enviado');
            }

        }
    }
?>