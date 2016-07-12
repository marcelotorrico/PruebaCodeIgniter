<?php

class RegistroPersona extends CI_Controller {
    
    function registrar()
   {
      $nombre   = $_POST['nombre'];
      $apellido = $_POST['apellido'];
      $edad     = $_POST['edad'];
      $this->load->model('Persona');
      $this->Persona->insertarPersona($nombre, $apellido, $edad);
      redirect('/ListaPersonas/ver', 'refresh');
   }
}
