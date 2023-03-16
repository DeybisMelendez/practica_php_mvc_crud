<!DOCTYPE html>
<html lang="es">

<?php require_once("views/template/head.html") ?>

<body class="grey lighten-2">
    <div class="container">
        <h2>Modificar usuario</h2>
        <form method="POST" class="col s12" id="editForm">
            <div class="input-field">
                <input type="text" name="cod" id="cod" value="<?= $_SESSION["edit"]["cod"] ?>" required>
                <label for="cod">Código</label>
            </div>
            <div class="input-field">
                <input type="text" name="nom" id="nom" value="<?= $_SESSION["edit"]["nom"] ?>" required>
                <label for="nom">Nombre</label>
            </div>
            <div class="input-field">
                <input type="email" class="validate" name="correo" id="correo" value="<?= $_SESSION["edit"]["correo"] ?>" required>
                <label for="correo">Correo</label>
            </div>
            <div class="input-field">
                <input type="text" class="validate" name="tel" id="tel" value="<?= $_SESSION["edit"]["tel"] ?>" required>
                <label for="tel">Teléfono</label>
            </div>
            <div class="right">
                <a href="/" class="waves-effect waves-light btn red">Cancelar</a>
                <a class="waves-effect waves-light btn modal-trigger green" href="#modal">Modificar</a>
            </div>
        </form>
    </div>
    <!-- Modal Structure -->
    <div id="modal" class="modal grey lighten-2">
        <div class="modal-content center">
            <p>¿Deseas modificar a este usuario?</p>
        </div>
        <div class="modal-footer grey lighten-2">
            <a href="#!" class="modal-close waves-effect waves-light red btn">No</a>
            <a class="waves-effect waves-light btn green" id="edit">Si</a>
        </div>
    </div>
    <script src="views/scripts/edit.js"></script>
    <?php require_once("template/js.html") ?>
</body>

</html>