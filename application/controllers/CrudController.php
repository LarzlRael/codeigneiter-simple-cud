<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CrudController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Crud_model');
        $this->load->model('Crud_mascota');
    }

    public function index()
    {
        $data['result'] = $this->Crud_model->getAllData();
        $data['mascota'] = $this->Crud_model->obtener_mascotas();
        $data['usuarios'] = $this->Crud_model->obtener_usuarios();
        $data['usuario_mascota'] = $this->Crud_model->get_usuaurios_mascotas();

        $this->load->view('crud_view', $data);
    }
    public function create()
    {
        $this->Crud_model->createDate();
        redirect('CrudController');
    }

    public function edit($id)
    {
        $data['row'] = $this->Crud_model->getData($id);
        $this->load->view('crud_edit',$data);
    }
    public function update($id){
        
        $this->Crud_model->updateData($id);
        redirect('CrudController');
    }
    public function delete_user($id){
        
        $this->Crud_model->delete($id);
        redirect('CrudController');
    }

    public function agregar_mascota_usuario(){
        $this->Crud_model->usuario_mascota();      
        redirect('CrudController');  
    }
    
    //=======================================
    //funciones para manejar la mascota
    //=======================================

    public function nueva_mascota(){
        
        $this->Crud_mascota->añadir_mascota();
        redirect('CrudController');
    }



    public function delete_mascota($id){
        
        $this->Crud_mascota->delete_mascota($id);
        redirect('CrudController');
    }

    public function editMascota($id,$idusuario)
    {
        $data['row'] = $this->Crud_mascota->get_mascota($id);
        $data['usuario'] = $this->Crud_model->getData($id);
        $data['usuarios'] = $this->Crud_model->getAllData();

        $this->load->view('crud_mascota',$data);
    }

    
    public function update_mascota($id){
        
        $this->Crud_mascota->updateMascota($id);
        redirect('CrudController');
    }
}
