<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Biodata_model extends CI_Model
{
    public function rules()
    {
        return [
            //['field' => 'id_biodata',
            //'label' => 'id_biodata',
            //'rules' => 'required'],
			
            ['field' => 'profesi',
            'label' => 'profesi',
            'rules' => 'required'],
			
            ['field' => 'nama',
            'label' => 'nama',
            'rules' => 'required'],
			
            ['field' => 'jk',
            'label' => 'jk',
            'rules' => 'required'],
			
            ['field' => 'ttl',
            'label' => 'ttl',
            'rules' => 'required'],
			
            ['field' => 'alamat',
            'label' => 'alamat',
            'rules' => 'required'],
			
            ['field' => 'agama',
            'label' => 'agama',
            'rules' => 'required'],
			
            ['field' => 'status',
            'label' => 'status',
            'rules' => 'required'],
			
			
            ['field' => 'resume',
            'label' => 'resume',
            'rules' => 'required'],
			
			['field' => 'keterangan',
            'label' => 'keterangan',
            'rules' => 'required']
        ];
    }
    public function getAll()
    {
        return $this->db->get('biodata')->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where('biodata', ["id_biodata" => $id])->row();
    }
    public function save()
    {
        $post = $this->input->post();
        $this->id_biodata 	= uniqid();
        $this->profesi    	= $post["profesi"];
        $this->nama     	= $post["nama"];
        $this->jk  			= $post["jk"];
        $this->ttl     		= $post["ttl"];
        $this->alamat    	= $post["alamat"];
        $this->agama 		= $post["agama"];
        $this->status    	= $post["status"];
        $this->foto     	= $this->_uploadImage();
        $this->resume   	= $post["resume"];
        $this->keterangan   = $post["keterangan"];
        
        $this->db->insert('biodata', $this);
    }
    public function update()
    {
        $post = $this->input->post();
        $this->id_biodata 		= $post["id_biodata"];
        $this->profesi     		= $post["profesi"];
        $this->nama    			= $post["nama"];
        $this->jk     			= $post["jk"];
        $this->ttl  			= $post["ttl"];
        $this->alamat     		= $post["alamat"];
        $this->agama    		= $post["agama"];
        $this->status 			= $post["status"];
        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }
		$this->resume   		= $post["resume"];
        $this->keterangan      	= $post["keterangan"];
		
		
        $this->db->update('biodata', $this, array('id_biodata' => $post['id_biodata']));
        
    }
    public function delete($id)
    {
        return $this->db->delete('biodata', array("id_biodata" => $id));
    }
    private function _uploadImage()
    {
        $config['upload_path']          = './assets/img/biodata/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->id_biodata;
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