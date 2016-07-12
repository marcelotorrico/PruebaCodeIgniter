<?php

class ListaPersonas extends CI_Controller {
    public function ver() {
         $this->load->model('Persona');
         $data["personas"] = $this->Persona->getPersonas();
         $this->load->view('ListaPersonas', $data);
    }
}
