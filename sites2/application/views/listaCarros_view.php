
<!-- Estrutura -->

<form name= method=POST>
<div
	class="container">

	<div class="page-header">
		<h2>
			Resultado<small> da Pesquisa</small>
		</h2>
	</div>

	<form class="form-horizontal" id="FormCadastro" method="POST"
			action="index.php/app/cadCarro">
			
			{carros}
			<input name='carro' value='{carroNome}' type='radio'>
			{/carros}
			
			<div class="form-actions">
					<button type="submit" class="btn btn-primary">Salvar</button>	
			</div>
	</form>
	</div>
