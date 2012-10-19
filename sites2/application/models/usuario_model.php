<?php

class Usuario_model extends CI_Model {
	
	
	/**
	 * Inicia construtor do model
	 */
	function __construct() 
	{
		parent::__construct();
	}


	

	/**
	  * Insere usuario no banco de dados
	  */ 
	function cadastrar($data) 
	{
		return $this->db->insert('Usuario', $data);
	}


	/**
	 * Lista usuarios do banco de dados
	 */
	function listar($opcao) 
	{
	//lista somente os ativos
		if($opcao == 2)								
		{
			$this->db->select('*');
			$this->db->from('Usuario');
			$this->db->where('usuarioAtivo', 'SIM');
			$this->db->join('Cargo', 'Usuario.cargoID = Cargo.cargoID');
			$this->db->join('Departamento', 'Usuario.departamentoID = Departamento.departamentoID');
			$this->db->join('Tipo', 'Usuario.tipoID = Tipo.tipoID');
			$this->db->join('Unidade', 'Departamento.departamentoID = Unidade.unidadeID');
			$query = $this->db->get();			
		}
		//lista somente os inativos
		elseif($opcao == 1)
		{
			$this->db->select('*');
			$this->db->from('Usuario');
			$this->db->where('usuarioAtivo', 'NÃO');
			$this->db->join('Cargo', 'Usuario.cargoID = Cargo.cargoID');
			$this->db->join('Departamento', 'Usuario.departamentoID = Departamento.departamentoID');
			$this->db->join('Tipo', 'Usuario.tipoID = Tipo.tipoID');
			$this->db->join('Unidade', 'Departamento.departamentoID = Unidade.unidadeID');
			$query = $this->db->get();	
		}
		//lista todos (ativos + inativos)
		else 
		{
			$this->db->select('*');
			$this->db->from('Usuario');
			$this->db->join('Cargo', 'Usuario.cargoID = Cargo.cargoID');
			$this->db->join('Departamento', 'Usuario.departamentoID = Departamento.departamentoID');
			$this->db->join('Tipo', 'Usuario.tipoID = Tipo.tipoID');
			$this->db->join('Unidade', 'Departamento.departamentoID = Unidade.unidadeID');
			$query = $this->db->get();
		}

		return $query->result();
	}


	/**
	 * Lista usuarios do banco de dados por tipo
	 */
	function listarPorTipo($id) 
	{
		$this->db->select('*');

		$this->db->from('Usuario');
		
	    $this->db->where('tipoID', $id);
	    
	    $this->db->where('usuarioAtivo', 'SIM'); //somente ativos
	    
		$this->db->join('Cargo', 'Usuario.cargoID = Cargo.cargoID');
		
		$this->db->join('Departamento', 'Usuario.departamentoID = Departamento.departamentoID');
		
		$this->db->join('Unidade', 'Departamento.departamentoID = Unidade.unidadeID');
		
		$query = $this->db->get();
		
		return $query->result();
	}

	
	
	/**
	 * Busca usuario
	 */
	function buscar($id)
	{
		$query = $this->db->query("SELECT usuarioID, usuarioNome, usuarioMatricula, usuarioLogin, usuarioPassword, 
				usuarioEmail, tipoID, usuarioAtivo FROM Usuario WHERE usuarioID = '$id' LIMIT 1");
		
		//$query = $this->db->tipo_model->buscar('tipoID');
	
		return $query->result();
	}
	
	
	

	/**
	 * Procura e deleta usuario do BD 
	 */
    function deletar($id)
    {
	    $this->db->where('usuarioID', $id);
	    $this->db->delete('Usuario');

	}

	
	function getUsuario($id)
	{
		
		$this->db->select('*');

		$this->db->from('Usuario');
		
	    $this->db->where('usuarioID', $id);
		
		$query = $this->db->get();
		
		return $query->result();

	}
}
