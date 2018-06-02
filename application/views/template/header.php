<html>

<head>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="<?php base_url();?>assets/css/materialize.min.css" media="screen,projection"
	/>
	<link type="text/css" rel="stylesheet" href="<?php base_url();?>assets/css/style.css" />
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body style="background-color:#C9CAD9;" class="blue-grey darken-4 white-text ">
	<nav class="black">
		<div class="nav-wrapper ">
			<img src="<?php echo base_url();?>assets/fondo/logo.png" class="responsive-img" width="100">
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li>
					<input type="text" style="width:100px;height:20px" name="rut_login" id="rut_login" placeholder="rut">
				</li>
				<li>
					<input type="password" style="background-color:#343539; width:100px;height:20px" name="clave_login" id="clave_login"
					placeholder="clave">
				</li>
				<li>
					<button class="btn" type="submit" id="bt_login">Ingresar</button>
				</li>
				<li></li>

			</ul>

		</div>
	</nav>
