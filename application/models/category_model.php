<?php

//Client Model

class Category_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

//Client
    function category_list() {
        $query = $this->db->query("SELECT `category` FROM ref_category");
        return $query->result();
    }

    

}

?>