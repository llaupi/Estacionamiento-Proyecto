
<div class="container">
<a class="waves-effect  btn modal-trigger" href="#modal1">Registrar</a>

<!-- Modal Structure -->
<div id="modal1" class="modal">
  <div class="modal-content black-text green">
    <h4>registrar</h4>
    <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="rut_registrar" type="text" class="validate">
          <label for="rut_registrar">rut</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="nombre_registrar" type="text" class="validate">
          <label for="nombre_registrar">Nombre</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="apellido_registrar" type="text" class="validate">
          <label for="apellido_registrar">apellido</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="direccion_registrar" type="text" class="validate">
          <label for="direccion_registrar">direccion</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="clave_registrar" type="password" class="validate">
          <label for="clave_registrar">clave</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="confirmaclave_registrar" type="password" class="validate">
          <label for="confirmaclave_registrar">confirmar clave</label>
        </div>
      </div>
      <div class="row">
      <div class="input-field col s6">
    <select>
      <option value="1">Guardia</option>
      <option value="0">Administrador</option>
    </select>
    <label class="black-text">Tipo:</label>
  </div>
  <div class="input-field col s6">
    <select>
      <option value="" disabled selected>Choose your option</option>
      <option value="1">Optisds</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
    </select>
    <label>Condominio</label>
  </div>
  </div>
  
</div>
        
</main>