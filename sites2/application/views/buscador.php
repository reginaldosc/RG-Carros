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

		<div class="hero-unit">
			<h1>
				<strong>RG Carros</strong>
			</h1>
		</div>

		<div class="page-header">
			<h2>
				Buscador <small> de Automóveis</small>
			</h2>
		</div>

<<<<<<< HEAD
		<form class="form-horizontal" id="FormCadastro" method="POST"
			action="index.php/app/cadastrarUsuario">

=======
	<form class="form-horizontal" id="FormCadastro" method="POST" action="index.php/app/cadastrarUsuario">  
			
>>>>>>> b510201c6b9a44f4f36ec294ecb8fff7f913253a
			<fieldset>

				<div class="control-group">
					<label class="control-label" for="">Nome</label>
					<div class="control-group">
						<input type="text" class="input-xlarge" id="Nome"
							placeholder="Nome completo" name="Nome">
					</div>
				</div>
				<br>

				<div class="control-group">
					<label class="control-label" for="">Sexo</label>
					<div class="controls">
						<select id="" name="Sexo" class="input-xlarge">
							<option value="F">Feminino</option>
							<option value="M">Masculino</option>
						</select>
					</div>
				</div>
				<br>


				<div class="control-group">
					<label class="control-label" for="">Idade</label>
					<div class="controls">
						<input type="text" class="input-xlarge" id="Idade" placeholder=""
							name="Idade">
					</div>
				</div>
				<br>


				<div class="control-group">
					<label class="control-label" for="">Salário</label>
					<div class="controls">
						<input type="text" class="input-xlarge" id="Salario"
							placeholder="Sem pontos nem vírgula" name="Salario">
					</div>
				</div>
				<br>

				<div class="control-group">
					<label class="control-label" for="">Estado Civil</label>
					<div class="controls">
						<select id="" name="Civil" class="input-xlarge">
							<option value="S">Solteiro</option>
							<option value="C">Casado</option>
							<option value="D">Divorciado</option>
							<option value="V">Viúvo</option>
						</select>
					</div>
				</div>
				<br>

				<div class="control-group">
					<label class="control-label" for="">Número de Filhos</label>
					<div class="controls">
						<select id="" name="Filhos" class="input-large">
							<option value=0>Nenhum</option>
							<option value=1>Um</option>
							<option value=2>Dois</option>
							<option value=3>Três</option>
							<option value=4>Quatro</option>
							<option value=5>Cinco ou Mais</option>
						</select>
					</div>
				</div>


				<br> <br> <br>


				<div class="form-actions">
					<button type="submit" class="btn btn-primary">Buscar</button>
					<button class="btn" type="reset">Limpar</button>
					<input type='button' size='40' value='Listar Usuarios' onclick="listAll"></input>		
				</div>
			
			</fieldset>
		</form>
</div>

</body>


<footer>
	<p>Univali - Universidade do Vale do Itajai - Reginaldo Gonçalves 2012</p>
</footer>
</html>
