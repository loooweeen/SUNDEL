<?php

//Employee Model

class Employee_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

//Employee
    function authenticate($username, $password) {
        $query = "SELECT employeeID FROM employees WHERE username = ? and password = ?";
        $result = $this->db->query($query, array($username, md5($password)));

        if ($result->num_rows() == 1) {
            return $result->row(0)->employeeID;
        } else {
            return false;
        }
    }

    function employee($userID) {
        $query = $this->db->query("SELECT * FROM employees WHERE employeeID = $userID");
        return $query->row();
    }

}

?>