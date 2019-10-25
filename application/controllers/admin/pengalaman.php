<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengalaman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("experiencce_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["pengalaman"] = $this->experiencce_model->getAll();
        $this->load->view("admin/pengalaman/list", $data);
    }

    public function add()
    {
        $experiencce = $this->experiencce_model;
        $validation = $this->form_validation;
        $validation->set_rules($experiencce->rules());

        if ($validation->run()) {
            $experiencce->save();
            $this->session->set_flashdata('success', 'Data Pengalaman Berhasil ditambahkan');
            redirect(site_url('admin/pengalaman/list'));
        }

        $this->load->view("admin/pengalaman/list");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/pengalaman');
       
        $experiencce = $this->experiencce_model;
        $validation = $this->form_validation;
        $validation->set_rules($experiencce->rules());
        if ($validation->run()) {
            $experiencce->update();
            $this->session->set_flashdata('success', 'Data Pengalaman Berhasil dirubah');            
            redirect(site_url('admin/pengalaman'));
            
        }

        $data["pengalaman"] = $experiencce->getById($id);
        if (!$data["pengalaman"]) show_404();
        
        $this->load->view("admin/pengalaman/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->experiencce_model->delete($id)) {
            redirect(site_url('admin/pengalaman/list'));
        }
    }
}