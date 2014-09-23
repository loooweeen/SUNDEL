<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Clients extends CI_Controller {

    public function index() {

        $userID = $this->session->userdata('userid');
        if (empty($userID)) {
            $this->session->set_flashdata('session_error', TRUE);
            redirect(base_url());
        }

        $data['name'] = $this->Employee_model->employee($userID)->firstname;
        $data['image'] = $this->Employee_model->employee($userID)->image;

        $data['clients'] = $this->Client_model->client_list();

        $this->load->view('header', $data);
        $this->load->view('clients', $data);
        $this->load->view('footer');
    }

    function profile($clientID) {
        $userID = $this->session->userdata('userid');
        if (empty($userID)) {
            $this->session->set_flashdata('session_error', TRUE);
            redirect(base_url());
        }

        $data['name'] = $this->Employee_model->employee($userID)->firstname;
        $data['image'] = $this->Employee_model->employee($userID)->image;

        $data['client'] = $this->Client_model->client($clientID);

        $this->load->view('header', $data);
        $this->load->view('client_profile', $data);
        $this->load->view('footer');
    }

}

?>