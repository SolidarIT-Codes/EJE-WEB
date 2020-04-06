<?php
    class LoginModel extends  CI_Model{

        public function __construct()
        {
            parent::__construct();
            $this->db = $this->load->database("default",TRUE);
        }


		public function adduser($data)
        {
			return $this->db->insert("usertable",$data);
            //$result_set = $this->db->query("select * from usertable");
           // return $result_set->result_array();
        }
		

        public function edituser($userid)
        {
            $where['id']  = $userid;

        }


        public function checkexistance($username)
        {
            $where['username']  = $username;
            $result = $this->db->get_where("usertable",$where);
            return true;
        }


        public function login($Email, $clef)
        {
            
            $this->db->where('email', $Email);
            $query = $this->db->get('partenaire');
            if($query->num_rows() > 0)
            {
             foreach($query->result() as $row)
             {
               $store_password = $row->clef;
               if($clef == $store_password)
               {
               // $this->session->set_userdata('id', $row->id);
                $this->session->set_userdata('nom', $row->Nom);
                $this->session->set_userdata('statut', $row->Statut);
                $this->session->set_userdata('role', $row->role);
               }
               else
               {
                return 'Wrong Password';
               }
             }
            }
            else
            {
             return 'Wrong Email Address';
            }
 
           
        }

    }

?>