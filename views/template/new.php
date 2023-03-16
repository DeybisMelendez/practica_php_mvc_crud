<!-- Edit Modal Structure -->
<div id="newModal" class="modal grey lighten-2">
    <div class="modal-content">
        <h4>Agregar usuario</h4>
        <form id="newForm" method="POST">
            <div class="input-field">
                <input type="text" name="newnom" id="nom" required>
                <label for="nom">Nombre</label>
            </div>
            <div class="input-field">
                <input type="email" name="newcorreo" id="correo" required>
                <label for="correo">Correo</label>
            </div>
            <div class="input-field">
                <input type="text" name="newtel" id="tel" required>
                <label for="tel">Número</label>
            </div>
        </form>
    </div>
    <div class="modal-footer grey lighten-2">
        <a href="#!" class="modal-close waves-effect waves-light btn red">Cancelar</a>
        <a class="waves-effect waves-light btn modal-trigger green" href="#confirmNew">Agregar</a>
    </div>
</div>
<!-- Modal Structure -->
<div id="confirmNew" class="modal grey lighten-2">
    <div class="modal-content center">
        <p>¿Deseas agregar a este usuario?</p>
    </div>
    <div class="modal-footer grey lighten-2">
        <a href="#!" class="modal-close waves-effect waves-light red btn">No</a>
        <a class="waves-effect waves-light btn green" id="add">Si</a>
    </div>
</div>
</div>