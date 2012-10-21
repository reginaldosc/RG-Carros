<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>RG Carros</title>

<style type="text/css">
::selection {
	background-color: #E13300;
	color: white;
}

::moz-selection {
	background-color: #E13300;
	color: white;
}

::webkit-selection {
	background-color: #E13300;
	color: white;
}

body {
	background-color: #fff;
	margin: 40px;
	font: 26/40px normal Helvetica, Arial, sans-serif;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #444;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	font-size: 30px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

#body {
	margin: 0 15px 0 15px;
}

p.footer {
	text-align: right;
	font-size: 11px;
	border-top: 1px solid #D0D0D0;
	line-height: 32px;
	padding: 0 10px 0 10px;
	margin: 20px 0 0 0;
}

#container {
	margin: 10px;
	border: 1px solid #D0D0D0;
	-webkit-box-shadow: 0 0 8px #D0D0D0;
}
</style>
</head>
<body>
<!-- Estrutura -->
<div class="container">

<div class="page-header">
		<h2>
			Lista<small> de Clientes Cadastrados</small>
		</h2>
	</div>
	

<form class="form-horizontal" id="FormCadastro" method="POST" action="index.php/app/listAll">	
	<!-- Tabela com a lista dos usuarios do sistema -->
	<fieldset>
	<table class='table table-bordered table-striped'>
		<thead>
			<tr>
				<th>Nome</th>
				<th>Sexo</th>
				<th>Idade</th>
				<th>Salario</th>
				<th>Estado Civil</th>
				<th>Numero de Filhos</th>
				<th>Carro</th>
			</tr>
		</thead>
				
		<tbody>
			{usuarios}
			<tr>
				<td>{usuarioNome}</td>
				<td>{usuarioSexo}</td>
				<td>{usuarioIdade}</td>
				<td>{usuarioSalario}</td>
				<td>{usuarioEstCivil}</td>
				<td>{usuarioNumFilhos}</td>
				<td>{usuarioCarro}</td>
			</tr>
			{/usuarios}
		</tbody>
	</table>
	</fieldset>
	<br>

</form>
</div>
</body>

<footer>
	<p><strong>Univali - Universidade do Vale do Itajai - Reginaldo Gonçalves 2012</strong></p>
</footer>
</html>


