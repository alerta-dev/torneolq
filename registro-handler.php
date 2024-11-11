<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $video = $_POST["video"];
    $avatar = $_FILES["avatar"];
    $link_avatar = $_POST["link-avatar"];

    // Guardar avatar
    $target_dir = "assets/uploads/";
    $target_file = $target_dir . basename($avatar["name"]);
    move_uploaded_file($avatar["tmp_name"], $target_file);

    // Enviar correo
    $to = "tu_correo@ejemplo.com";  // Cambia esto a tu correo
    $subject = "Nuevo registro en TorneoLq";
    $message = "Video: $video\nAvatar: $target_file\nEnlace del avatar: $link_avatar";
    $headers = "From: noreply@torneolq.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Registro enviado correctamente.";
    } else {
        echo "Hubo un error al enviar el registro.";
    }
}
?>
