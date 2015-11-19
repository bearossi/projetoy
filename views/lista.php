<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/estilo.css" />
	<title>Listar</title>
</head>

<body>
<header>
		<img src="<?php echo base_url(); ?>static/img/logo-fatec.png"></img>
</header>
	<ul>
		<li><a href="https://projetoy-bearossii.c9.io/index.php/project/home">Home</a></li>
		<li><a href="https://projetoy-bearossii.c9.io/index.php/project/index">Nossa história</a></li>
		<li><a href="https://projetoy-bearossii.c9.io/index.php/project/quemsomos">Quem Somos</a></li>
		<li><a href="https://projetoy-bearossii.c9.io/index.php/project/form">Formulário</a></li>
		<li><a href="https://projetoy-bearossii.c9.io/index.php/project/listar">Listar</a></li>
	</ul>


<h1 id="lis"> Lista de Usuários </h1>

<?php
 foreach($usuarios as $u){
     echo "<h3>". "Nome: " .$u->nome. "<h3>";
     echo "<h3>" . "Login: " . $u->login. "<h3>";
     
     echo "<h3>" . "Email: " . $u->email. "<h3><br><br>";    
     }
?>


</body>

</html>








