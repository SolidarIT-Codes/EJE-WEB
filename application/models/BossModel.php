<?php
    class BossModel extends  CI_Model{

        public function __construct()
        {
            parent::__construct();
            $this->db = $this->load->database("default",TRUE);
        }


        public function showpart()
        {
            $data = 1;
            $result_set = $this->db->query("select * from partenaire  where role = '".$data."' order by id desc");
            return $result_set->result_array();
        }

        public function showdoc()
        {
            $data = 'medecin';
            $result_set = $this->db->query("select * from utilisateur  where Statut = '".$data."' order by id desc");
            return $result_set->result_array();
        }


        public function showtrans()
        {
            $data = 'transporteur';
            $result_set = $this->db->query("select * from utilisateur  where Statut = '".$data."' order by id desc");
            return $result_set->result_array();
        }


        public function showdon()
        {
            $data = 'donneur';
            $result_set = $this->db->query("select * from utilisateur  where Statut = '".$data."' order by id desc");
            return $result_set->result_array();
        }

        public function showind()
        {
            $data = 'individu';
            $result_set = $this->db->query("select * from utilisateur  where Statut = '".$data."' order by id desc");
            return $result_set->result_array();
        }





		public function showbloodspec($groupe,$rhesus)
        {
            $where['groupe']  = $groupe;
            $where['rhesus'] = $rhesus;
            $result = $this->db->get_where("stock",$where);
            return $result->result_array();
        }
		

        //--------//
        public function showcourses($nom)
        {
            $where['Commandeur']  = $nom;
            $where['validation']  = 0;
            $result = $this->db->get_where("alerte",$where);
            return $result->result_array();
        }

        public function updatecourses($id,$new_data)
        {
            $where['id'] = $id;
            return $this->db->update('alerte',$new_data,$where);
        }

        //-------//

		 
		

        public function edit($id)
        {
            $where['id']  = $id;

        }


        public function getsinglepart($id)
        {
            $where['id']  = $id;
            $result = $this->db->get_where("utilisateur",$where);
            return $result->result_array();
        }


        public function updateblood($id,$new_data)
        {
            $where['id'] = $id;
			return $this->db->update('utilisateur',$new_data,$where);
        }	

        public function suppr($id)
        {

                $this->db->where('id', $id);
               return $this->db->delete('utilisateur'); 
        }	

    }

?>