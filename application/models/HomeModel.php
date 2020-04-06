<?php
    class HomeModel extends  CI_Model{

        public function __construct()
        {
            parent::__construct();
            $this->db = $this->load->database("default",TRUE);
        }


        public function showusers()
        {
        }
		
		
		 public function adduser($data)
        {
			return $this->db->insert("partenaire",$data);
            
        }
        public function userupdate($data)
        {
            $sql = "insert into stock (groupe, rhesus, quantite, proprietaire) values
            ('A', '+', '0', '".$data."'),
            ('A', '-', '0', '".$data."'),
            ('B', '+', '0', '".$data."'),
            ('B', '-', '0', '".$data."'),
            ('O', '+', '0', '".$data."'),
            ('O', '-', '0', '".$data."'),
            ('AB', '+', '0', '".$data."'),
            ('AB', '-', '0', '".$data."')";
        return $this->db->query($sql);
        }

		 public function addcamp($data)
        
        {
            return $this->db->insert("campagne",$data);
        }

        public function showcamp($data)
        
        {
            $day = date('Y-m-d');
            $result_set = $this->db->query("select * from campagne  where proprio = '".$data."'
             order by id desc");
            return $result_set->result_array();
        }
        //and moment = '".$day."' 

         public function alert($data)
        {
            return $this->db->insert("alerte",$data);
        }

        public function edituser($userid)
        {
            $where['id']  = $userid;

        }


        public function getsingleuser($userid)
        {
        }


        public function updateuser($id,$new_data)
        {
        }
		

        public function deleteuser($userid)
        {
        }






    }

?>