<!-- Edit Modal Structure -->
<div id="editModal" class="modal grey lighten-2">
    <div class="modal-content">

        <form method="POST" class="col s12" id="editForm">
            <div class="row">
                <div class="col s12 m6">
                    <h4>Modificar usuario</h4>
                </div>
                <div class="input-field col s12 m6">
                    <input type="text" placeholder="Placeholder" name="editcod" id="editCod" required disabled>
                    <label for="cod">Código</label>
                </div>
                <div class="input-field col s12 m6">
                    <input type="text" placeholder="Placeholder" name="editnom" id="editNom" required>
                    <label for="nom">Nombre</label>
                </div>
                <div class="input-field col s12 m6">
                    <input type="email" placeholder="Placeholder" class="validate" name="editcorreo" id="editCorreo" required>
                    <label for="correo">Correo</label>
                </div>
                <div class="input-field col s12 m6">
                    <input type="text" placeholder="Placeholder" class="validate" name="edittel" id="editTel" required>
                    <label for="tel">Teléfono</label>
                </div>
            </div>

        </form>
    </div>
    <div class="modal-footer grey lighten-2">
        <a href="#!" class="modal-close waves-effect waves-light btn red">Cancelar</a>
        <a class="waves-effect waves-light btn modal-trigger green" href="#confirmEdit">Modificar</a>
    </div>
</div>
<!-- Modal Structure -->
<div id="confirmEdit" class="modal grey lighten-2">
    <div class="modal-content center">
        <p>¿Deseas modificar a este usuario?</p>
    </div>
    <div class="modal-footer grey lighten-2">
        <a href="#!" class="modal-close waves-effect waves-light red btn">No</a>
        <a class="waves-effect waves-light btn green" id="edit">Si</a>
    </div>
</div>