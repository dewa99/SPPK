<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    public function get_auth_list()
    {
        $q = $this->db->get('user_admin');
        return $q->result();
    }

    public function login($username, $password)
    {
        $q = $this->db->where('username', $username);
        $q = $this->db->where('password', md5($password));
        $q = $this->db->get('user_admin', 1);

        return $q->result();
        
    }

}

/* End of file ModelName.php */
