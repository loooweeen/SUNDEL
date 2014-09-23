<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index() {

        $userID = $this->session->userdata('userid');
        if (empty($userID)) {
            $this->session->set_flashdata('session_error', TRUE);
            redirect(base_url());
        }

        $data['name'] = $this->Employee_model->employee($userID)->firstname;
        $data['image'] = $this->Employee_model->employee($userID)->image;

        $this->load->view('header', $data);
        $this->load->view('dashboard', $data);
        $this->load->view('footer');
    }

}

?>