<?php
	Class Home_model extends CI_Model{
		public function getBiodata()
		{
			return $this->db->get('biodata')->row_array();

		}
		public function getPendidikan()
		{

			return $this->db->get('pendidikan')->result();

		}
		public function getPengalaman()
		{

			return $this->db->get('pengalaman')->row_array();

		}
		public function getPortfolio()
		{

			return $this->db->get('portfolio')->result();
		}
		public function getSkill()
		{

			return $this->db->get('skill')->result();
		}
		public function getById($id)
		{
			return $this->db->get_where('biodata',["id_biodata" => $id])->row();
			return $this->db->get_where('pendidikan',["id_pendidikan" => $id])->row();
			return $this->db->get_where('pengalaman',["id_pengalaman" => $id])->row();
			return $this->db->get_where('portfolio',["id_portfolio" => $id])->row();
			return $this->db->get_where('skill',["id_skill" => $id])->row();
			
		}
		
	}
?>