<!DOCTYPE html>
<html lang="es">
<?php require_once("views/template/head.html") ?>

<body class="grey lighten-2">

    <div class="fixed-action-btn">
        <a href="#newModal" class="btn-floating btn-large red modal-trigger">
            <i class="large material-icons">person_add</i>
        </a>
    </div>

    <div class="container">
        <div class="center">
            <h2>LISTAR USUARIOS</h2>
        </div>
        <table class="highlight responsive-table">
            <thead>
                <tr>
                    <th>Nro</th>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Acción</th>
                </tr>
            </thead>

            <?php foreach ($_SESSION["users"] as $user => $values) : ?>
                <tr>
                    <td><?= $user + 1 ?></td>
                    <td><?= $values["cod"] ?></td>
                    <td><?= $values["nom"] ?></td>
                    <td><?= $values["correo"] ?></td>
                    <td><?= $values["tel"] ?></td>
                    <td class="center">
                        <a href="#editModal" class="waves-effect waves-light modal-trigger btn" onclick="selectEdit(<?= $values['cod'] ?>)">
                            <i class="material-icons">mode_edit</i>
                        </a>
                        <a class="waves-effect waves-light modal-trigger btn red" href="#deleteUser" onclick="select(<?= $values['cod'] ?>)">
                            <i class="material-icons">delete</i>
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
    <!-- Detele Modal Structure -->
    <div id="deleteUser" class="modal grey lighten-2">
        <div class="modal-content center">
            <p>¿Deseas eliminar a este usuario?</p>
        </div>
        <div class="modal-footer grey lighten-2">
            <a href="#!" class="modal-close waves-effect waves-light red btn">No</a>
            <a class="waves-effect waves-light btn green" id="delete">Si</a>
        </div>
    </div>
    <?php require_once("views/template/edit.php") ?>
    <?php require_once("views/template/new.php") ?>

    <script src="views/scripts/index.js"></script>
    <?php require_once("template/js.html") ?>
</body>

</html>