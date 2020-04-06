<?php
    class BloodModel extends  CI_Model{

        public function __construct()
        {
            parent::__construct();
            $this->db = $this->load->database("default",TRUE);
        }


        public function showblood($data)
        {
            $result_set = $this->db->query("select * from stock  where proprietaire = '".$data."' order by id desc");
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

		 public function addblood($data)
        {
			return $this->db->insert("stock",$data);
        }
		

        public function editblood($bloodid)
        {
            $where['id']  = $bloodid;

        }


        public function getsingleblood($bloodid)
        {
            $where['id']  = $bloodid;
            $result = $this->db->get_where("stock",$where);
            return $result->result_array();
        }


        public function updateblood($id,$new_data)
        {
            $where['id'] = $id;
			return $this->db->update('stock',$new_data,$where);
        }		

    }

?>