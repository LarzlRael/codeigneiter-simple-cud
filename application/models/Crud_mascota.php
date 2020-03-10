<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud_mascota extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function index()
    {
        $this->load->view('crud_view');
    }
    public function create_mascota()
    {
        $data = array(
            'lastname' => $this->input->post('lastname'),
            'firstname' => $this->input->post('firstname'),
            'birthdate' => $this->input->post('birthdate'),
            'contacto' => $this->input->post('contacto'),
            'bio' => $this->input->post('bio'),
        );
        $this->db->insert('usuarios', $data);
    }

    public function getData($id)
    {
        $query = $this->db->query("select * from usuarios where id='$id'");
        return $query->row();
    }
    public function updateData($id)
    {
        $data = array(
            'lastname' => $this->input->post('lastname'),
            'firstname' => $this->input->post('firstname'),
            'birthdate' => $this->input->post('birthdate'),
            'contacto' => $this->input->post('contacto'),
            'bio' => $this->input->post('bio'),
        );
        $this->db->where('id', $id);
        $this->db->update('usuarios', $data);
    }
    public function delete_mascota($id)
    {

        $this->db->where('idmascota', $id);
        $this->db->delete("mascota");
    }

    public function get_mascota($id)
    {

        $query = $this->db->query("select * from mascota where idmascota='$id'");
        return $query->row();
    }

    public function updateMascota($id)
    {
        $data = array(
            'nombre_mascota' => $this->input->post('nombre_mascota'),
            'direccion' => $this->input->post('direccion'),

        );
        $this->db->where('idmascota', $id);
        $this->db->update('mascota', $data);
    }
    public function añadir_mascota()
    {
        $data = array(
            'nombre_mascota' => $this->input->post('nombre_mascota'),
            'direccion' => $this->input->post('direccion'),
            'idusuario' => $this->input->post('idusuario'),

        );
        $this->db->insert('mascota', $data);
    }
}
