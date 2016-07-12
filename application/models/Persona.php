<?php

class Persona extends CI_Model {
    
    public $nombre;
    public $apellido;
    public $edad;
    
    function __construct(){
      parent::__construct();
   }
   
   function insertarPersona($nombre, $apellido, $edad){
       $this->nombre = $nombre;
       $this->apellido = $apellido;
       $this->edad = $edad;
       $this->db->insert('persona', $this);
   }
   
   function getPersonas() {
       $query = $this->db->get('persona');
       return $query->result();
   }
}
