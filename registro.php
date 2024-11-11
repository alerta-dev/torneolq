<?php include("includes/header.php"); ?>
<div class="registro">
    <h1>Registro al Torneo</h1>
    <form action="registro-handler.php" method="post" enctype="multipart/form-data">
        <label for="video">Enlace del Video:</label>
        <input type="url" name="video" id="video" required>

        <label for="avatar">Subir Avatar:</label>
        <input type="file" name="avatar" id="avatar" accept="image/*" required>

        <label for="link-avatar">Enlace para Descargar Avatar:</label>
        <input type="url" name="link-avatar" id="link-avatar" required>

        <button type="submit">Registrar</button>
    </form>
</div>
