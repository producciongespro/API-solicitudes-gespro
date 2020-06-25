<?php

class Gestiones_model extends CI_Model {

public function setDiseno() {
    $diseno = array(
            'idUsuario' => 1,  
            'idProductoDiseno'=> 5, 
            'descripcion'=> 'Prueba 852' 
        );

            $this->db->insert('solicitud_diseno', $diseno);
}

public function getDiseno()
{
   
    $this->db->select("*");    
    $this->db->from("solicitud_diseno");    
    $query=$this->db->get();

    if ($query->num_rows()>0) {
        return $query->result();
    } else {
        return NULL;
    }    
    
}

}