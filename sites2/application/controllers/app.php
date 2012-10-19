<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App extends CI_Controller {

	public function index()
	{
		$this->load->view('buscador');
		
	}

		/**
		 * Chama a view para listar usuarios e socita ao model todos os usuarios cadastrados do bd
		 */
		public function listAll()
		{
	
			// Lista todos os usuarios //
			$data['usuarios'] = $this->usuario_model->listar(0);
	
			// Carrega a view correspondende //
			$data['main_content'] = 'usuario/listUser_view';
	
			// Envia todas as informacoes para tela //
			$this->parser->parse('template', $data);
	
		}
	
	
		/**
		 * Recupera as informacoes da view newUser, e carrega o model para gravar no banco os dados
		 */
		public function cadastrarUsuario()
		{
			echo"teste";
			// Recupera dos dados a serem cadastrados //
			$data['usuarioNome']     	= $this->input->post('Nome');
			$data['usuarioSexo']		= $this->input->post('Sexo');
			$data['usuarioIdade']    	= $this->input->post('Idade');
			$data['usuarioSalario'] 	= $this->input->post('Salario');
			$data['usuarioEstCivil']   	= $this->input->post('Civil');
			$data['usuarioNumFilhos']	= $this->input->post('Filhos');
	
				
			// Insere os dados do novo usuario no bd //
			$this->usuario_model->cadastrar($data);
	
			//redirect('usuario/listAll');
	
		}
	
	
		/**
		 *
		 * Apresenta view de edicao de um usuario
		 *
		 */
		public function editUser($id)
		{
			$data2['main_content']	= 'usuario/editUser_view';
	
			$data['usuario'] 		= $this->usuario_model->buscar($id);
	
			//print_r($data);
	
			$data2['usuarioID'] 	= $data['usuario'][0]->usuarioID;
	
			$data2['usuarioNome'] 	= $data['usuario'][0]->usuarioNome;
	
			$data2['usuarioEmail'] 	= $data['usuario'][0]->usuarioEmail;
	
			$data2['cargos']		= $this->cargo_model->listar(2);
	
			$data2['unidades']		= $this->unidade_model->listar(2);
	
			$data2['departamentos']	= $this->departamento_model->listar(2);
	
			$data2['tipos']			= $this->tipo_model->listar(2);
	
			$this->parser->parse('template', $data2);
		}
	
	}

/* End of file app.php */
/* Location: ./application/controllers/app.php */
