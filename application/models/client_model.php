<?php

//Client Model

class Client_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

//Client
    function client_list() {
        $query = $this->db->query("SELECT * FROM clients");
        return $query->result();
    }

    function client($clientID) {
        $query = $this->db->query("SELECT * FROM clients WHERE clientID = $clientID");
        return $query->row();
    }

}

?>