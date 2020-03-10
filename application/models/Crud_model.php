<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function index()
    {
        $this->load->view('crud_view');
    }
    public function createDate()
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
    public function getAllData()
    {
        $query = $this->db->query('select * from usuarios;');
        return $query->result();
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
    public function delete($id)
    {

        $this->db->where('id', $id);
        $this->db->delete("usuarios");
    }

    public function usuario_mascota()
    {

        $lastname = $this->input->post('lastname');
        $firstname = $this->input->post('firstname');
        $birthdate = $this->input->post('birthdate');
        $contacto = $this->input->post('contacto');
        $bio = $this->input->post('bio');
        $mascota = $this->input->post('mascota');
        $direccion = $this->input->post('direccion');


        $query = $this->db->query("CALL agregar_usuarioo_mascota('$lastname','$firstname','$birthdate','$contacto','$bio','$mascota',
        '$direccion')");
        if ($query) {
            echo 'success';
        } else {
            echo 'faid';
        }
    }

    //
    public function obtener_mascotas()
    {
        $query = $this->db->query('select * from mascota;');
        return $query->result();
    }
    public function obtener_usuarios()
    {
        $query = $this->db->query('select * from usuarios;');
        return $query->result();
    }
    public function get_usuaurios_mascotas()
    {
        $query = $this->db->query('select u.firstname,u.lastname,m.nombre_mascota,m.direccion from usuarios u inner join mascota m on u.id = m.idusuario;');
        return $query->result();
    }
}
