<?php
class FormularioPersona extends CI_Controller {

   function index()
   {
      echo 'Bienvenido a mi primer controlador en CodeIgniter';
   }
   
   function mostrarFormulario()
   {
      $this->load->view('Formulario');
   }
}
?>