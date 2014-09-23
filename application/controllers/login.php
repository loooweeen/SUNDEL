<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {

        $userID = $this->session->userdata('userid');

        if (!empty($userID)) {
            redirect("dashboard");
        }

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|max_length(50)|xaa_clean');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|max_length(50)|xaa_clean');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else { //process their input and login the user            
            extract($_POST); //Gets everything $username $password
            $userID = $this->Employee_model->authenticate($username, $password);
            if (!$userID) {
                //login failed
                $this->session->set_flashdata('login_error', TRUE);
                redirect('login');
            } else {
                //login successful
                $login_data = array(
                    'logged_in' => TRUE,
                    'userid' => $userID,
                );

                $this->session->set_userdata($login_data);
                redirect('dashboard');
            }
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect(base_url());
    }

}

?>