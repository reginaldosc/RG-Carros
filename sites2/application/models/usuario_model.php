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
		if($opcao == 0)
		{
			$this->db->select('*');
			$this->db->from('Usuario');
			$query = $this->db->get();
		}

		return $query->result();
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

}
