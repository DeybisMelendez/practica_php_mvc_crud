<!DOCTYPE html>
<html lang="es">
<?php require_once("views/template/head.html") ?>

<body class="grey lighten-2">
    <div class="container">
        <h2>Agregar usuario</h2>
        <form action="/add" class="col s12" id="editForm" method="POST">
            <div class="input-field">
                <input type="text" name="nom" id="nom" required>
                <label for="nom">Nombre</label>
            </div>
            <div class="input-field">
                <input type="email" name="correo" id="correo" required>
                <label for="correo">Correo</label>
            </div>
            <div class="input-field">
                <input type="text" name="tel" id="tel" required>
                <label for="tel">Número</label>
            </div>
            <div class="right">
                <a href="/" class="waves-effect waves-light btn red">Cancelar</a>
                <a class="waves-effect waves-light btn modal-trigger green" href="#modal">Agregar</a>
            </div>
        </form>
    </div>
    <!-- Modal Structure -->
    <div id="modal" class="modal grey lighten-2">
        <div class="modal-content center">
            <p>¿Deseas agregar a este usuario?</p>
        </div>
        <div class="modal-footer grey lighten-2">
            <a href="#!" class="modal-close waves-effect waves-light red btn">No</a>
            <a class="waves-effect waves-light btn green" id="add">Si</a>
        </div>
    </div>
    <script src="views/scripts/new.js"></script>
    <?php require_once("template/js.html") ?>
</body>

</html>