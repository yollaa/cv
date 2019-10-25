<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Experiencce_model extends CI_Model
{
    public function rules()
    {
        return [
		
            ['field' => 'keterangan',
            'label' => 'Keterangan',
            'rules' => 'required'],
			
			['field' => 'nama_perusahaan',
            'label' => 'Perusahaan',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        $hasil = $this->db->order_by('id_pengalaman', 'DESC');
        $hasil = $this->db->get('pengalaman');       
        return $hasil->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where('pengalaman', ["id_pengalaman" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_pengalaman 		= uniqid();
        $this->keterangan   		= $post["keterangan"];
		$this->foto     			= $this->_uploadImage();
		$this->nama_perusahaan      = $post["nama_perusahaan"];
        $this->db->insert('pengalaman', $this);
    }

    public function update($id = null)
    {
        $post = $this->input->post();
        $this->id_pengalaman 		= $post["id"];
        $this->keterangan         	= $post["keterangan"];
        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }
        $this->nama_perusahaan   	= $post["nama_perusahaan"];
        $this->db->update('pengalaman', $this, array('id_pengalaman' => $post['id']));        
    }

    public function delete($id)
    {
        return $this->db->delete('pengalaman', array("id_pengalaman" => $id));
    }

	private function _uploadImage()
    {
    $config['upload_path']          = './assets/img/pengalaman/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->id_pengalaman;
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