<!-- Modal Structure -->
<div class="container ">
<h4 class="center-align">registrar</h4>
		<div class="row">
			<form  class="col s12">
				<div class="row">
					<div class="input-field col s6">
						<i class="material-icons prefix">account_circle</i>
						<input id="rut_registrar" type="text" class="validate">
						<label for="rut_registrar">rut</label>
					</div>
					<div class="input-field col s6">
						<i class="material-icons prefix">face</i>
						<input id="nombre_registrar" type="text" class="validate">
						<label for="nombre_registrar">Nombre</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s6">
						<i class="material-icons prefix">face</i>
						<input id="apellido_registrar" type="text" class="validate">
						<label for="apellido_registrar">apellido</label>
					</div>
					<div class="input-field col s6">
						<i class="material-icons prefix">home</i>
						<input id="direccion_registrar" type="text" class="validate">
						<label for="direccion_registrar">direccion</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s6">
						<i class="material-icons prefix">lock</i>
						<input id="clave_registrar" type="password" >
						<label for="clave_registrar">clave</label>
					</div>
					<div class="input-field col s6">
						<i class="material-icons prefix">lock</i>
						<input id="confirmaclave_registrar" type="password" >
						<label for="confirmaclave_registrar">confirmar clave</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s6">
						<select id="tipo_registrar">
							<option value=1>Guardia</option>
							<option value=0>Administrador</option>
						</select>
						<label class="black-text">Tipo:</label>
					</div>
					<div class="input-field col s6">
						<select id="condominio_reg">
						</select>
						<label>Condominio</label>
					</div>
				</div>
				<a id="btn_registrar" class="waves-effect waves-light btn right blue">agregar</a>
			</form>
		</div>
</div>
	

<!-- ======================= fin modal =================== -->




<!-- ============== fin modal ==============  -->






</main>
