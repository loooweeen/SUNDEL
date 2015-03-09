<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Products extends CI_Controller {

    public function index() {

        $userID = $this->session->userdata('userid');
        if (empty($userID)) {
            $this->session->set_flashdata('session_error', TRUE);
            redirect(base_url());
        }

        $data['name'] = $this->Employee_model->employee($userID)->firstname;
        $data['image'] = $this->Employee_model->employee($userID)->image;

        $data['products'] = $this->Product_model->product_list();

        $this->load->view('header', $data);
        $this->load->view('products', $data);
        $this->load->view('footer');
    }

    public function NewProduct() {
        $userID = $this->session->userdata('userid');
        if (empty($userID)) {
            $this->session->set_flashdata('session_error', TRUE);
            redirect(base_url());
        }

        $data['name'] = $this->Employee_model->employee($userID)->firstname;
        $data['image'] = $this->Employee_model->employee($userID)->image;
        $data['categories'] = $this->Product_model->category_list();

        $this->load->view('header', $data);
        $this->load->view('products_new', $data);
        $this->load->view('footer');
    }

    public function product_insert() {
        $userID = $this->session->userdata('userid');
        if (empty($userID)) {
            $this->session->set_flashdata('session_error', TRUE);
            redirect(base_url());
        }

        $data['name'] = $this->Employee_model->employee($userID)->firstname;
        $data['image'] = $this->Employee_model->employee($userID)->image;

        $product_name = $this->input->post('productName');
        $product_code = $this->input->post('productCode');
        $product_category = $this->input->post('productCategory');

        $product = array(
            'categoryID' => $product_category,
            'code' => $product_code,
            'name' => $product_name
        );
        $this->Product_model->insert_product($product);
        redirect(base_url() . 'products');
    }

    public function details($product_id) {
        $userID = $this->session->userdata('userid');
        if (empty($userID)) {
            $this->session->set_flashdata('session_error', TRUE);
            redirect(base_url());
        }

        $data['name'] = $this->Employee_model->employee($userID)->firstname;
        $data['image'] = $this->Employee_model->employee($userID)->image;

        $this->load->view('header', $data);
        $this->load->view('products_new', $data);
        $this->load->view('footer');
    }

}

?>