<?php
	class Mod_report extends CI_Model{
		function get_distinct_dosen_1($thn_ajar,$semester){
		   $kal = 'SELECT DISTINCT dosen_1 FROM tb_beban_if WHERE thn_ajar='.$thn_ajar.' AND semester='.$semester;
			$q = $this->db->query($kal);
         return $q->result();
		}
      function get_distinct_dosen_2($thn_ajar,$semester){
			$kal ='
               SELECT DISTINCT dosen_2 
               FROM tb_beban_if 
               WHERE 
               (dosen_2 not in (SELECT DISTINCT dosen_1 FROM tb_beban_if)) 
               AND (thn_ajar='.$thn_ajar.' AND semester='.$semester.')
               ';	
			$q = $this->db->query($kal);
         return $q->result();
      }
      function get_nama_nip_pangkat_jabatan_dosen_by_id($id_dosen){
         $kal = 'SELECT nama_dosen,nip,pangkat,jabatan FROM tb_dosen_if WHERE id_dosen='.$id_dosen;
         $q = $this->db->query($kal);
         return $q->row();
      }
      
      function get_kelas_matkul_by_id_dosen($id_dosen,$thn_ajar,$semester){
         $kal ='
				SELECT id_beban, matkul, jumlah_kelas 
				FROM tb_beban_if 
				WHERE 
				(dosen_1='.$id_dosen.' OR dosen_2='.$id_dosen.')
				AND
				(thn_ajar='.$thn_ajar.' AND semester='.$semester.')'
				;
         $q = $this->db->query($kal);
         return $q->result_array();
      }
      function get_dosen1_dosen2_by_id_dosen($id_beban){
         $kal = 'SELECT dosen_1,dosen_2 FROM tb_beban_if WHERE id_beban='.$id_beban;
         $q = $this->db->query($kal);
         return $q->row();
      }
      
      function get_nama_sks_matkul_by_id($id_matkul){
         $kal = 'SELECT nama_matkul,sks FROM tb_matkul WHERE id_matkul='.$id_matkul;
         $q = $this->db->query($kal);
         return $q->row();
      }
      
      function get_thn_ajar_bebanif(){
         $kal = 'SELECT DISTINCT thn_ajar FROM tb_beban_if';
         $q = $this->db->query($kal);
         return $q->result();
      }
      
	}
?>