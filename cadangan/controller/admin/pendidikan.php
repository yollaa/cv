<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pendidikan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("education_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["pendidikan"] = $this->education_model->getAll();
        $this->load->view("admin/pendidikan/list", $data);
    }

    public function add()
    {
        $education = $this->education_model;
        $validation = $this->form_validation;
        $validation->set_rules($education->rules());

        if ($validation->run()) {
            $education->save();
            $this->session->set_flashdata('success', 'Data Pendidikan Berhasil ditambahkan');
            redirect(site_url('admin/pendidikan/list'));
        }

        $this->load->view("admin/pendidikan/list");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/pendidikan');
       
        $education = $this->education_model;
        $validation = $this->form_validation;
        $validation->set_rules($education->rules());
        
        if ($validation->run()) {
            $education->update();
            $this->session->set_flashdata('success', 'Data Pendidikan Berhasil dirubah');            
            redirect(site_url('admin/pendidikan'));
            
        }

        $data["education"] = $education->getById($id);
        if (!$data["education"]) show_404();
        
        $this->load->view("admin/pendidikan/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->education_model->delete($id)) {
            redirect(site_url('admin/pendidikan'));
        }
    }
}