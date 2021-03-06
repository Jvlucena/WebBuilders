<?php
	define('PAGE','editarUsuarioPaciente');
	define('TITLE','Editar Usuario');
	$pageConfig = array(
		'plugins'=> array('datepicker')
	);
	require_once 'includes/functions.php';
	require_once 'includes/header.php';
?>
	<h1 class="ac">Editar Usuario</h1>
	<form id="proced-box" class="form-edit box-wrap" action="includes/update-usuario-paciente.php" method="post">
		<section class="form-section">
			<?php
				display_edit_usuarios_paciente_rows();
			?>
		</section>
		<div class="ac cb">
			<button class="form-cancel">Cancelar</button>
			<button type="submit" id="btnEnviar" >Guardar</button>
		</div>
	</form>
<?php
	require_once 'includes/footer.php';
?>
<script type="text/javascript">
document.getElementById('btnEnviar').addEventListener('click', validar);

	function validar (e){
		var txtContrasennaNueva = document.getElementById("user-psw").value,
			txtContrasennaNueva2 = document.getElementById("user-cpsw").value;

			if (! (txtContrasennaNueva === txtContrasennaNueva2)) {
				SO.utils.showPopUp('Las contraseñas no son iguales');
				e.preventDefault();
			}
	}
</script>
