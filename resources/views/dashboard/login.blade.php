<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>

		<!--CSS Person-->
		<link rel="stylesheet" href="css/dash/login-webdevalfa.css">

		<!--Favicon-->
		<link rel="icon" type="image/png" href="imgs/favicon2.png">
	</head>
<body class="bg-login">

	<section class="login">
		
		<div class="image-login">
			<img src="imgs/logo-webdevalfa.png" alt="WebDevAlfa" class="img-login">
		</div>

		<form class="form-login" method="get" action="dashboard">

			<input type="hidden" name="logado" value="1">
			
			<input type="text" name="email" placeholder="E-mail">
			<input type="password" name="pass" placeholder="Senha">

			<button class="btn-login">Acessar</button>

			<a href="dashboard-recuperar" class="rel-pass">Recuperar Senha?</a>

		</form>

	</section>

</body>
</html>