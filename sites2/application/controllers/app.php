<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App extends CI_Controller {

	public function index()
	{
				
		$this->load->view('buscador');
		$this->listAll();
	}

	/**
	 * Chama a view para listar usuarios e socita ao model todos os usuarios cadastrados do bd
	 */
	public function listAll()
	{
		// Lista todos os usuarios //
		$data['usuarios'] = $this->usuario_model->listar(0);

		$this->parser->parse('listaUsuarios', $data);
	}

	/**
	 * Recupera as informacoes da view newUser, e carrega o model para gravar no banco os dados
	 */
	public function cadastrarUsuario()
	{
			
		// Recupera dos dados a serem cadastrados //
		$data['usuarioNome']     	= $this->input->post('Nome');
		$data['usuarioSexo']		= $this->input->post('Sexo');
		$data['usuarioIdade']    	= $this->input->post('Idade');
		$data['usuarioSalario'] 	= $this->input->post('Salario');
		$data['usuarioEstCivil']   	= $this->input->post('Civil');
		$data['usuarioNumFilhos']	= $this->input->post('Filhos');

		$data2['users'] = $this->usuario_model->listar(0);
		//print_r($data2);
			
		// Insere os dados do novo usuario no bd //
		$this->usuario_model->cadastrar($data);
			
		$indices = $this->calculaSimilaridade($data, $data2);
		
		if($indices == NULL)
		{
			$resultado['Carros'][0]->usuarioCarro = "Nenhum carro encontrado";
			$this->parser->parse('listaCarros_view', $resultado);
		}
		else
		{
		arsort ($indices);
		$keys = array_keys($indices);
			
		$opcoes['Carros'] = $this->usuario_model->listarPorIndices($keys);
			
		$tamanho = count($opcoes['Carros']);
		//print_r($opcoes);
			
		for ($i=0; $i < $tamanho; $i++) {
			
			$resultado['Carros'][$i]->usuarioCarro =  $opcoes['Carros'][$i][0]->usuarioCarro;
			
		}
		$this->parser->parse('listaCarros_view', $resultado);
		}
	}

	/*
	 * calcula a similaridade do novo usuario com os do BD
	 */
	public function calculaSimilaridade($data, $data2)
	{
		$S['carros']=NULL;
		
		for ($i=0; $i < count($data2['users']); $i++)
		{
			$S[$i] = 0;
			
				
			if($data['usuarioSexo']	== $data2['users'][$i]->usuarioSexo)
			{
				$S[$i] += 0.7;
			}
			if($data['usuarioEstCivil']	== $data2['users'][$i]->usuarioEstCivil)
			{
				$S[$i] += 0.2;
			}
			if($data['usuarioNumFilhos'] == $data2['users'][$i]->usuarioNumFilhos)
			{
				$S[$i] += 0.6;
			}
			if(($data['usuarioIdade'] >= ($data2['users'][$i]->usuarioIdade - 2)) &&
					($data['usuarioIdade']<= ($data2['users'][$i]->usuarioIdade + 2)))
			{
				$S[$i] += 0.6;
			}
			if(($data['usuarioSalario'] >= ($data2['users'][$i]->usuarioSalario - 150)) &&
					($data['usuarioSalario']<= ($data2['users'][$i]->usuarioSalario + 150)))
			{
				$S[$i] += 0.9;
			}
			//S=70%
			if($S[$i] >= 2.1)
			{
				$S['carros'][$i+1] = $S[$i];
				//$S['is'][$i] = $i;
			}
			
		}
		
		return ($S['carros']);
	
		
	}
	
	
	/*
	 * atualiza o carro escolhido
	 */
	public function cadCarro()
	{
		
		$data['usuarioCarro'] = $this->input->post('carro');
		
		$data2['usuarioCarro'] = $this->input->post('Nome');
		
		$id2 = $this->usuario_model->listar(1);
		
		$id = $id2[0]->usuarioID;
	
		if($data['usuarioCarro'] != NULL)	
		{
			$this->usuario_model->atualizaUsuario($id, $data);
		}
		elseif($data2['usuarioCarro'] != NULL)
		{
			$this->usuario_model->atualizaUsuario($id, $data2);
		} 
		else
		{
			$this->usuario_model->deletarUsuario($id);
		}
		
		$this->index();
	}
	
}

/* End of file app.php */
/* Location: ./application/controllers/app.php */
