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
		$this->db->insert('Usuario', $data);
		$this->db->select('usuarioID');
		$this->db->from('Usuario');
		$this->db->where($data);
		$query = $this->db->get();
		return ($query->result());
	}


	/**
	 * Lista usuarios do banco de dados
	 */
	function listar($opcao)
	{
		//lista somente os ativos
		if($opcao == 0)
		{
			$this->db->select('*');
			$this->db->from('Usuario');
			$this->db->where_not_in('usuarioCarro','NULL' );
			$query = $this->db->get();
			return $query->result();
		}

		if($opcao == 1)
		{
			/*$sql = "SELECT `usuarioID` FROM Usuario ORDER BY `usuarioID` DESC LIMIT 1";
			$this->db->select('usuarioID');
			$this->db->from('Usuario');
			$this->db->order_by('usuarioID', 'DESC');*/
			
			$this->db->select_max('usuarioID');
			$query = $this->db->get('Usuario');
			return $query->result();
		}
		
	}


	/**
	 * Lista usuarios do banco de dados por tipo
	 */
	function listarPorIndices($ids)
	{

		if(count($ids) >= 5)
		{
			$tamanho = 5;
		}
		else
		{
			$tamanho = count($ids);
		}

		for ($i=0; $i < $tamanho; $i++)
		{
			$this->db->select('usuarioCarro');
			$this->db->from('Usuario');
			$this->db->where('usuarioID', $ids[$i]);
			$query= $this->db->get();
			$busca{$i} = $query->result();
		}
	
		return $busca;
	}
	
	public function atualizaUsuario($id, $data)
	{
		
		$this->db->update('Usuario', $data, "usuarioID = $id");
	}

	public function deletarUsuario($id)
	{
		$this->db->select('usuarioCarro');
		$this->db->from('Usuario');
		$this->db->where('usuarioID', $id);
		$query= $this->db->get();
		if ($query == NULL)
		{
			$this->db->where('usuarioID', $id);
			$this->db->delete('Usuario');
		}
		
	}
}
