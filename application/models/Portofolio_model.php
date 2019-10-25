<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Portofolio_model extends CI_Model
{
    public function rules()
    {
        return [
            


            ['field' => 'keterangan',
            'label' => 'Keterangan',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get('portfolio')->result();
    }

    public function getById($id)
    {
        return $this->db->get_where('portfolio', ["id_portfolio" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_portfolio 	= uniqid();
        $this->foto     		= $this->_uploadImage();
        $this->keterangan     	= $post["keterangan"];
        $this->db->insert('portfolio', $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_portfolio 	= $post["id"];
        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }
        $this->keterangan     	= $post["keterangan"];

        

        $this->db->update('portfolio', $this, array('id_portfolio' => $post['id']));
        
    }

    public function delete($id)
    {
        return $this->db->delete('portfolio', array("id_portfolio" => $id));
    }

    private function _uploadImage()
    {
    $config['upload_path']          = './assets/img/portfolio/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->id_portfolio;
    $config['overwrite']			= true;
    $config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('foto')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
    }
}