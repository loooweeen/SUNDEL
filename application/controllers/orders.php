<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Orders extends CI_Controller {

    public function index() {

        $userID = $this->session->userdata('userid');
        if (empty($userID)) {
            $this->session->set_flashdata('session_error', TRUE);
            redirect(base_url());
        }

        $data['name'] = $this->Employee_model->employee($userID)->firstname;
        $data['image'] = $this->Employee_model->employee($userID)->image;

        $data['orders'] = $this->Order_model->order_list();

        $this->load->view('header', $data);
        $this->load->view('orders', $data);
        $this->load->view('footer');
    }

    function purchase($transactionID) {
        $userID = $this->session->userdata('userid');
        if (empty($userID)) {
            $this->session->set_flashdata('session_error', TRUE);
            redirect(base_url());
        }

        $data['name'] = $this->Employee_model->employee($userID)->firstname;
        $data['image'] = $this->Employee_model->employee($userID)->image;

        $data['transaction'] = $this->Order_model->transaction($transactionID);
        $data['orders'] = $this->Order_model->order($transactionID);
        $this->load->view('header', $data);
        $this->load->view('orders_purchase', $data);
        $this->load->view('footer');
    }

}

?>