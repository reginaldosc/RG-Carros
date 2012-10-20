
<!-- Estrutura -->
<div class="container">

<div class="page-header">
		<h2>
			Resultado<small> da Pesquisa</small>
		</h2>
	</div>
	
		<br>

<form class="form-horizontal" id="FormCadastro" method="POST"
			action="index.php/app/listAll">	

	<!-- Tabela com a lista dos usuarios do sistema -->
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
	<br>



