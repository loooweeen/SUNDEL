<?php

//Product Model

class Product_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

//Product
    function product_list() {
        $query = $this->db->query("SELECT * FROM products");
        return $query->result();
    }

    function product($productID) {
        $query = $this->db->query("SELECT * FROM products WHERE productID = $productID");
        return $query->row();
    }

}

?>