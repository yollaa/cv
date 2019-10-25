<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Skill_model extends CI_Model
{
    public function rules()
    {
        return [
            ['field' => 'id_skill',
            'label' => 'Id Skill',
            'rules' => 'required'],

            ['field' => 'nama_skill',
            'label' => 'Keahlian',
            'rules' => 'required'],

            ['field' => 'persentase',
            'label' => 'Persentase',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        $hasil = $this->db->get('skill');       
        return $hasil->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where('skill', ["id_skill" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_skill     = uniqid();
        $this->nama_skill   = $post["nama_skill"];
        $this->persentase   = $post["persentase"];
        $this->db->insert('skill', $this);
    }

    public function update($id = null)
    {
        $post = $this->input->post();
        $this->id_skill         = $post["id_skill"];
        $this->nama_skill         = $post["nama_skill"];
        $this->persentase   = $post["persentase"];
        $this->db->update('skill', $this, array('id_skill' => $post['id_skill']));        
    }

    public function delete($id)
    {
        return $this->db->delete('skill', array("id_skill" => $id));
    }

}