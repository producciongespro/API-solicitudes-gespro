<?php

class Gestiones_model extends CI_Model {

public function insertDiseno()
{
    $diseno = array(
            'idUsuario' => 1,  
            'idProductoDiseno'=> 2, 
            'descripcion'=> 'Esta es una prueba desde codeigniter' 
        );

    $this->db->insert('solicitud_diseno', $diseno);
}

}