<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sosmed_model extends CI_Model
{
    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required'],

            ['link' => 'keterangan',
            'label' => 'Keterangan',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        $hasil = $this->db->get('sosmed');       
        return $hasil->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where('sosmed', ["id_sosmed" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
		$this->id_sosmed = uniqid();
        $this->nama         	= $post["nama"];
        $this->username         = $post["username"];
        $this->keterangan	   	= $post["keterangan"];
		$this->foto     		= $this->_uploadImage();
        $this->db->insert('sosmed', $this);
    }

    public function update($id = null)
    {
        $post = $this->input->post();
		$this->id_sosmed        = $post["id"];
        $this->nama         	= $post["nama"];
        $this->username         = $post["username"];
        $this->keterangan   	= $post["keterangan"];
		if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }
        $this->db->update('sosmed', $this, array('id_sosmed' => $post['id']));        
    }

    public function delete($id)
    {
        return $this->db->delete('sosmed', array("id" => $id));
    }
	private function _uploadImage()
    {
        $config['upload_path']          = './assets/img/sosmed/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->id_sosmed;
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