<!DOCTYPE html>
<html lang="es">
<?php include("views/template/head.html") ?>

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
                        <a class="waves-effect waves-light modal-trigger btn red" href="#deleteModal" onclick="selectDelete(<?= $values['cod'] ?>)">
                            <i class="material-icons">delete</i>
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
    <!-- Detele Modal Structure -->
    <div id="deleteModal" class="modal grey lighten-2">
        <div class="modal-content center">
            <h4>Eliminar usuario</h4>
            <form>
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input type="text" placeholder="Placeholder" name="cod" id="delcod" disabled>
                        <label for="cod">Código</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input type="text" placeholder="Placeholder" name="nom" id="delnom" disabled>
                        <label for="nom">Nombre</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input type="email" placeholder="Placeholder" name="correo" id="delcorreo" disabled>
                        <label for="correo">Correo</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input type="text" placeholder="Placeholder" name="tel" id="deltel" disabled>
                        <label for="tel">Teléfono</label>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer grey lighten-2">
            <a href="#!" class="modal-close waves-effect waves-light red btn">No</a>
            <a class="waves-effect waves-light btn green" id="delete">Si</a>
        </div>
    </div>
    <?php include("views/template/edit.html") ?>
    <?php include("views/template/new.html") ?>

    <script src="views/scripts/index.js"></script>
    <?php include("template/js.html") ?>
</body>

</html>