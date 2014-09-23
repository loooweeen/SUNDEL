<?php

//Order Model

class Order_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

//Order
    function order_list() {
        $query = $this->db->query("SELECT * FROM transaction");
        return $query->result();
    }

    function order($trasactionID) {
        $query = $this->db->query("SELECT * FROM transaction WHERE trasactionID = $trasactionID");
        return $query->row();
    }

}

?>