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

    function transaction($transactionID) {
        $query = $this->db->query("SELECT * FROM `transaction` WHERE transactionID = $transactionID");
        return $query->row();
    }

    function order($trasactionID) {
        $query = $this->db->query("SELECT * FROM `order` WHERE transactionID = $trasactionID");
        return $query->result();
    }

}

?>