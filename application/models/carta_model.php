<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Carta_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		
	}

	//--- Comprueba correo y clave existan (ingresar) ------------------//
    public function traer_dias()
	{
		
		$sql =  "	SELECT * 
					FROM  `dias` ";		

		$query = $this->db->query($sql);
		return $query;
	}

	//--- Traer ultimas dos semanas ------------------//
    public function traer_ultimas_semanas()
	{
		
		$sql =  "	SELECT * 
					FROM  `relacion_menu_semanal` r, `dias` d, 	(	
																	SELECT * 
																	FROM  `menu_semanal` 
																	ORDER BY fecha_comienzo DESC 
																	LIMIT 0 , 2
																)s ,
							`menu` m
					WHERE r.id_semana = s.id
					AND r.id_dia = d.id
					AND r.id_menu = m.id 
					ORDER BY s.fecha_comienzo ASC , d.id ASC 
					LIMIT 0 , 30 ";		

		$query = $this->db->query($sql);
		return $query;
	}

	//--- Traer menus de un tipo de menu ------------------//
    public function traer_menus_por_tipo($tipo_menu)
	{
		
		$sql =  "	SELECT m.id, m.menu, m.precio
					FROM  `tipo_menu` tp,  `menu` m
					WHERE tp.id = m.id_tipo
					AND tp.descripcion =  '$tipo_menu' ";		

		$query = $this->db->query($sql);
		return $query;
	}

}

/* End of file  */
/* Location: ./application/models/ */