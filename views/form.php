<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="<?php echo base_url(); ?>static/js/script.js"></script>
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/estilo.css" />
	<title>Formulário</title>
	
</head>
<body>
<div id="container">
<header>
	<img src="<?php echo base_url(); ?>static/img/logo-fatec.png"></img>

</header>
<div id="content">
<nav>
	<ul>
		<li><a href="https://projetoy-bearossii.c9.io/index.php/project/home">Home</a></li>
		<li><a href="https://projetoy-bearossii.c9.io/index.php/project/index">Nossa história</a></li>
		<li><a href="https://projetoy-bearossii.c9.io/index.php/project/quemsomos">Quem Somos</a></li>
		<li><a href="https://projetoy-bearossii.c9.io/index.php/project/form">Formulário</a></li>
		<li><a href="https://projetoy-bearossii.c9.io/index.php/project/listar">Listar</a></li>
	</ul>
</nav>

<main>

<h2>Contato:</h2>

<p>Que tal nos informar seus dados? Dessa forma entraremos em contato com você o mais breve!</p>

<h3>Formulário</h3>

<h3>Dados de usuario:</h3>
<form action="/index.php/project/doPost" method="POST">
    Nome: <input type="text" name="nome" id="nome"/>
    Login: <input type="text" name="login" id="login"/>
    E-mail: <input type="text" name="email" id="email">
     <input type="submit" value="OK" onclick="teste()"/>
</form>

<br><br><br>


<p>Obrigado por fazer parte da nossa história!</p>
</main>

<aside>

<h3>Vestibular 2016</h3>
<p>Inscrições do Processo Seletivo

De 07/10 até às 15h do dia 11/11/2015 - Inscrições do Processo Seletivo no site www.vestibularfatec.com.br</p>
<a href="#">Leia Mais</a>

<h3>Maratona de Programação</h3>
<p>Mostre seus conhecimentos na Maratona de Programação 2015. Não perca tempo e inscreva-se!</p>
<a href="#">Leia Mais</a>


</aside>
</div>

<footer>
&copy;2015 - Todos os direitos reservados. Desenvolvido por Beatriz Rossi & Rodolfo Cruz
</footer>




</body>
</html>
