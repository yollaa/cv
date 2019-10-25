<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("portofolio_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["portfolio"] = $this->portofolio_model->getAll();
        $this->load->view("admin/portfolio/list", $data);
    }

    public function add()
    {
        $portofolio = $this->portofolio_model;
        $validation = $this->form_validation;
        $validation->set_rules($portofolio->rules());

        if ($validation->run()) {
            $portofolio->save();
            $this->session->set_flashdata('success', 'Data Portofolio Berhasil ditambahkan');
            redirect(site_url('admin/portfolio/list'));
        }

        $this->load->view("admin/portfolio/list");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/portfolio/edit_portfolio');
       
        $portofolio = $this->portofolio_model;
        $validation = $this->form_validation;
        $validation->set_rules($portofolio->rules());
        
        if ($validation->run()) {
            $portofolio->update();
            $this->session->set_flashdata('success', 'Data Portofolio Berhasil dirubah');            
            redirect(site_url('admin/portfolio/edit_portfolio'));
            
        }

        $data["portfolio"] = $portofolio->getById($id);
        if (!$data["portfolio"]) show_404();
        
        $this->load->view("admin/portfolio/edit_portfolio", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->portofolio_model->delete($id)) {
            redirect(site_url('admin/portofolio'));
        }
    }
}