<?php

class User_model extends CI_Model {

    public function get_users() {

        $query = $this->db->query('SELECT * FROM users');

        // return $query->num_rows();        
       // return $query->num_fields();        
    }
}

?>