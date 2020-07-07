<?php

class Diseno_model extends CI_Model {

public function setDiseno($idUsuario, $idProductoDiseno, $descripcion ) {
    /* Esta instruccion es para consultas desde Codeinigter
    $diseno = array(
            'idUsuario' => $idUsuario,  
            'idProductoDiseno'=> $idProductoDiseno, 
            'descripcion'=> $descripcion 
        );
        $this->db->insert('solicitud_diseno', $diseno);
        */
            $this->db->callFunction('INSERT_DISENO', $idUsuario, $idProductoDiseno, $descripcion);

}


public function getProdDiseno () {
    
    $datos= $this->db->query( 'CALL GET_PRODDISENO'  );
    return $datos;
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

public function updateDiseno ()
{
    $diseno = array(
        'idUsuario' => 1,  
        'idProductoDiseno'=> 4, 
        'descripcion'=> 'UPDATED 123' 
    );
    $this->db->where("id",12);
    $this->db->update('solicitud_diseno', $diseno);
}

}